<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LocationChooser extends Component
{
    public $chooserId; // The id of the select.
    public $chooserData; // A name/code pair; name will be the option, code its value.
    public $selected; // The currently selected item.

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($chooserId, $chooserData, $selected)
    {
        $this->chooserData = $chooserData;
        $this->selected = $selected;
        $this->chooserId = $chooserId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.location-chooser');
    }
}
