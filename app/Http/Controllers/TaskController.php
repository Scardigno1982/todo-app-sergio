<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Status;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;




class TaskController extends Controller
{





    public function index()
    {
        $estados = Task::all();

        $statuses = Status::all();

        $users = User::all();

//        $cats = Http::get('https://api.thecatapi.com/v1/images/search');
//
//        $cat = $cats->json();

//dd($cat);


        return view('/dashboard')->with('estados', $estados)->with('statuses', $statuses)->with('users', $users);

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

        return view('task.show')->with('task', $task);

    }


    public function edit($id)
    {
        $task_id = Task::all()->first();

        $statuses = Status::all()->first();

        $estados = Status::all();

//        $users = User::all->first();

        $task = ($id);

        return view ('/tasks.edit')->with('estados', $estados)->with('task', $task)->with('task_id', $task_id)->with('statuses', $statuses);
    }


    public function update(Request $request, Task $task)
    {
        $this->validate($request,
            [
                'name' => 'bail|required|max:50',
                'description' => 'required|max:200',
                'status_id' => 'required|numeric|exists:statuses,id',
            ]);

            $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'status_id' => $request->status_id,
        ]);
        return view('tasks.edit')->with('task', $task);
    }


    public function destroy($id)
    {
        $task->delete();
        return redirect(route('dashboard'));
    }
}
