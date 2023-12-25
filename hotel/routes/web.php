<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [AuthController::class , 'register'] )->name('register');

Route::post('/register', [AuthController::class , 'store'] );

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/login',[AuthController::class,'authenticate']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');

// EMPLOYEE
Route::get('admin/employee/create', function () {
    return view('Admin.Employee.create');
});
Route::resource('admin/employees', EmployeesController::class);

// GUEST
Route::get('admin/guest/create', function () {
    return view('Admin.Guest.create');
});
Route::resource('admin/guests', GuestController::class);

Route::get('/dashboard',function()
{
    return view('dashboard');
})->name('dashboard');
