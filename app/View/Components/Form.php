<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{

    public $task;
    private $statuses;

    /**
     * Form constructor.
     * @param $task
     */
    public function __construct($task)
    {
        $this->task = $task;
        $this->statuses = Status::all();
    }
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task.form')->with('statuses',$this->statuses);
    }
}
