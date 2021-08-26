<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;

class Exp01 extends Component
{
    /**
     * The Message to pass to the Component.
     */
    public $message;

    public $foo;

    public $now;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($foo = 'foo wasn\'t set', $message)
    {
        // These are settable outside the class.
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
        if (strtoupper($this->foo) === 'BAR') {
            $this->foo = 'Foo was changed to baz in '.__FILE__;
        }

        $this->now = new Carbon();

        return view('components.exp01');
    }
}
