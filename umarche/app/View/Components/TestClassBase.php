<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $message;
    public $defualtMessage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message, $defualtMessage="default")
    {
        $this->$message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-class-base');
    }
}
