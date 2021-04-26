<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Apps extends Component
{
    public $appIcon;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($appIcon, $link)
    {
        $this->appIcon = $appIcon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.apps');
    }
}
