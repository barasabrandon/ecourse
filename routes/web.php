<?php

use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AssignmentsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DailyIncomeController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\UsersController;
use App\Models\Courses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

if (Auth::guest()) {
    Route::get('/', function () {
        return redirect()->route('login');
    });
}

Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('dashboard');

Route::get('/asign-admin', [UsersController::class, 'asignAdmin'])->name('assignroles');
Route::get('/create-role', [UsersController::class, 'createRoles'])->name('createRoles');


//COURSES
Route::middleware(['auth', 'role:admin|tutor|student'])->group(function () {
    Route::get('/course-list', [CoursesController::class, 'index'])->name('courses.index');
});
Route::middleware(['auth', 'role:admin|tutor'])->prefix('courses')->name('courses.')->group(function () {
    Route::get('/create', [CoursesController::class, 'create'])->name('create');
    Route::post('/create', [CoursesController::class, 'store'])->name('store');
});

//ASSIGNMENTS
Route::middleware(['auth', 'role:admin|tutor|student'])->group(function () {
    Route::get('/assignmrnts-list', [AssignmentsController::class, 'index'])->name('assignments.index');
});
Route::middleware(['auth', 'role:admin|tutor'])->prefix('assignments')->name('assignments.')->group(function () {
    Route::get('/create', [AssignmentsController::class, 'create'])->name('create');
    Route::post('/create', [AssignmentsController::class, 'store'])->name('store');
});




require __DIR__ . '/auth.php';
