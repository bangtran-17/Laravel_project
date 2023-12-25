<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\GuestController;
use App\Models\Department;
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

// Admin Dashboard
Route::get('admin', function () {
    return view('Admin.Dashboard.index');
});
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

// DEPARTMENT
Route::get('admin/department/create', function () {
    return view('Admin.Department.create');
});
Route::resource('admin/departments', DepartmentController::class);

// Payment
Route::get('/payment-info', function () {
    return view('Payment.paymentB1');
});
Route::get('/payment-method', function () {
    return view('Payment.paymentB2');
});
Route::get('/payment-success', function () {
    return view('Payment.paymentB3');
});


Route::get('/dashboard',function()
{
    return view('dashboard');
})->name('dashboard');
