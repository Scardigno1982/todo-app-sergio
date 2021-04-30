<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Task extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nombre;

    /**
     * Task constructor.
     * @param $nombre
     */


    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task');
    }
}
