<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class All extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    private $tasks;

    /**
     * All constructor.
     * @param $tasks
     */

    public function __construct()
    {
        $this->tasks = Auth::user()->tasks()->withTrashed()->get();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.all')->with('tasks', $this->tasks);
    }
}
