<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;

class ClassComponent01 extends Component
{
    /**
     * These are automatically available outside the class (in the view files, for example).
     */
    public $message;
    public $foo;
    public $now;

    /**
     * Create a new component instance.
     *
     * Note that if $foo wasn't set, it has a default value. That's standard php.
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
        if (strtoupper($this->foo) === 'BAR') {
            $this->foo = 'Foo was changed to baz in '.__FILE__;
        }

        $this->now = new Carbon();

        return view('components.ClassComponent01');
    }
}
