<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Edit extends Component
{

    public $task;

    /**
     * Edit constructor.
     * @param $task
     */

    public function __construct($task)
    {
        $this->task = $task;
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
        return view('components.edit');
    }
}
