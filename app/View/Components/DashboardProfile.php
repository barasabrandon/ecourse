<?php

namespace App\View\Components;

use App\Models\Assignments;
use App\Models\Courses;
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
        $courses = Courses::count();
        $assignments = Assignments::count();
        return view('components.dashboard-profile')->with([
            'courses' => $courses,
            'assignments' => $assignments
        ]);
    }
}
