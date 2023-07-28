<?php

namespace App\Http\Controllers;

use App\Models\Assignments;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class UsersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createRoles()
    {
        $rolesToCreate = ['admin', 'tutor', 'student'];

        // Loop through the roles and create if they don't exist
        foreach ($rolesToCreate as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
        }

        return back()->with('message', 'Roles created successfully.');
    }

    public function asignAdmin()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return back()->with('message', 'Role exists.');
        }

        if ($user->email === 'barasabrandon@gmail.com') {
            $user->assignRole('admin');   
            return redirect()->back()->with('success', 'Role assigned successfully.');        
        } else {
           return redirect()->back()->with('error', 'Not authorized to perform this function.');
        }
        
    }

    public function dashboard()
    {
        $user = Auth::user();
        $courses = Courses::count();
        $assignments = Assignments::count();
        $userRoles = $user->getRoleNames();

        return view('dashboard')->with([
            'userRoles' => $userRoles,
            'courses'   => $courses,
            'assignments'   => $assignments,
        ]);
    }

    public function asignStudentRole()
    {
        $user = Auth::user();

        if ($user->hasRole('student')) {
            return back()->with('message', 'Already enrolled.');
        } else { 
            $user->assignRole('student'); 
           return back()->with('success', 'You have successfully enrolled.');
        }
        
    }
}
