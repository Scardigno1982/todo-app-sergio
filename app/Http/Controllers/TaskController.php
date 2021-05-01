<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;




class TaskController extends Controller
{





    public function index()
    {
        $estados = Task::all();

        $statuses = Status::all();

//        $users = User::all();

//        $cats = Http::get('https://api.thecatapi.com/v1/images/search');
//
//        $cat = $cats->json();

//dd($cat);


        return view('/dashboard')->with('estados', $estados)->with('statuses', $statuses);

    }


    public function create()
    {
        return view('/perrito');
    }


    public function store(Request $request)
    {

        //Validation


        $this->validate($request, [
            'name' => 'bail|required|max:50',
            'description' => 'required|max:200',
            'status_id' => 'required|max:200',

        ]);

        $task = new Task ([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'status_id' => $request->status_id,
        ]);

        $task->save();

        return redirect('/dashboard')->with('success', 'Task has been added');


    }


    public function show($id)
    {
        $estados = Task::all();

        $statuses = Status::all();

        $users = User::all();

        return view('/dashboard')->with('statuses', $statuses)->with('users', $users)->with('estados', $estados);

    }


    public function edit($id)
    {
        $status = Status::all();
        $task_id = Task::find($id);

        return view ('/tasks.edit')->with('task_id', $task_id)->with('status', $status);
    }


    public function update(Request $request, $id)
    {
        $statuses = Status::select(['name']);
        $task_id = Task::find($id);

        $task_id->update([
            'name' => $request->name,
            'description' => $request->description,
            'status_id' => $request->status_id,
        ]);

        $estados = Task::all();
        return view('/dashboard')->with('task_id', $task_id)->with('estados', $estados)->with('statuses', $statuses);



    }


    public function destroy($id)
    {

        $task_id = Task::where('id',$id)->first();;
        $task_id->delete();
        return back()->with('info', 'Fue eliminado exitosamente');    }
}
