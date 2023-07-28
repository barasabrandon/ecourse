<?php

namespace App\View\Components;

use App\Models\Accessories;
use App\Models\Phones;
use Illuminate\View\Component;

class DashboardProfile extends Component
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
        $phones = Phones::count();
        $accessories = Accessories::count();
        return view('components.dashboard-profile')->with([
            'phones' => $phones,
            'accessories' => $accessories
        ]);
    }
}
