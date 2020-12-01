<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Timeline extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tweets;
    public function __construct($tweets)
    {
        //
        $this->tweets = $tweets;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.timeline');
    }

    
}
