<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FollowersList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $followeds;
    public function __construct($followeds)
    {
        //
        $this->followeds = $followeds;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.followers-list');
    }

}
