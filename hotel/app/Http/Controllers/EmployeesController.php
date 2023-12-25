<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index(){

        $employees = Employee::orderBy('E_ID', 'desc')->get();
        // dd($employee);
        return view('Admin.Employee.index')->with('employees', $employees);
    }

    public function create(Request $request) {
        // dd("Tạo một nhân viên");
        return redirect('/employees');
    }

    public function add() {
        // dd('hi');
        return view('Employees.add');
    }
    public function edit($id){
        // $employee = Employee::find($id);
        $employee = DB::table('employees')->where('E_ID', $id)->first();
        // dd($employee);
        return view('Employees.edit')->with('employee', $employee);
    }

    public function update(Request $request, $id)
    {
        // return view('Guests.edit');
        $employee =  Employee::where('E_ID', $id)->update([
            'E_FirstName' => $request->input('firstname'),
            'E_Email' => $request->input('email'),
            'E_ContactNumber' => $request->input('phonenumber'),
            'E_Address' => $request->input('address')
        ]);
        // dd($request);
        return redirect('/employees');
    }

    public function show(int $id){
        // dd($employee);
        // $employee = Employee::find($id);
        // Hoặc bạn cũng có thể sử dụng query builder nếu cần
        $employee = DB::table('employees')->where('E_ID', $id)->first();
        // dd($employee);
        
        return view('Admin.Employee.show')->with('employee', $employee);
    }
    

    public function destroy($id) {
        $employee = Employee::where('E_ID', $id)->delete();
        // dd($guest);
        return redirect('/employees');
    }
}
