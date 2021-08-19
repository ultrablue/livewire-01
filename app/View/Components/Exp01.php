<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Exp01 extends Component
{
    /**
     * The Message to pass to the Component.
     */
    public $message;

    public $foo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($foo = 'foo wasn\'t set', $message)
    {
        $this->foo = $foo;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.exp01');
    }
}
