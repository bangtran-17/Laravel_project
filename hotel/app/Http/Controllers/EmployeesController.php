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

    public function store(Request $request) {
        $data = $request->all();
        // dd($request);
        Employee::create($data);
        return redirect('/admin/employees');
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
            'E_FirstName' => $request->input('E_FirstName'),
            'E_Email' => $request->input('E_Email'),
            'E_ContactNumber' => $request->input('E_ContactNumber'),
            'E_Designation' => $request->input('E_Designation'),
            'E_JoinDate' => $request->input('E_JoinDate')
        ]);
        // dd($request);
        return redirect('/admin/employees');
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
        // dd($id);
        $employee = Employee::where('E_ID', $id)->delete();
        // dd($guest);
        return redirect('/admin/employees');
    }
}
