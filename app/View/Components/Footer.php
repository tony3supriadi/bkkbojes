<?php

namespace App\View\Components;

use App\Models\Link;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sosmeds = Link::all();
        //dd($sosmed);
        return view('layouts.inc.footer', compact('sosmeds'));
    }
}
