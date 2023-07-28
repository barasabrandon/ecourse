<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class EnrollContainer extends Component
{
    public $user;
    public $userRoles;

    public function mount()
    {
        $this->user = Auth::user();
        $this->userRoles = $this->user->getRoleNames();
    }

    public function assignStudentRole()
    {
        $this->user->assignRole('student');
        $this->userRoles = $this->user->getRoleNames();
        $this->dispatchBrowserEvent('roleAssigned', 'Student role assigned successfully!');
    }

    public function render()
    {
        return view('livewire.enroll-container');
    }
}
