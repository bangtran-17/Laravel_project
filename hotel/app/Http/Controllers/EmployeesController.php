<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
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
        $request->E_DepartmentName;
        if($request->E_DepartmentName != null){
            $data = $request->all();

            $DE_ID = DB::table('department')->where('DE_Name',$request->E_DepartmentName)->first();
            // dd($DE_ID);
            if($DE_ID != null){
                $data['DE_ID'] = $DE_ID->id;
            }else{
                return redirect()->back()->withErrors(['message' => 'Không tìm thấy phòng ban với tên đã cho']);
            }

            Employee::create($data);
            return redirect('/admin/employees');
        }
        else{
            $data = $request->all();
            Employee::create($data);
            return redirect('/admin/employees');
        }
        

        // dd($data);
        
        
    }

    public function edit($id){
        // $employee = Employee::find($id);
        $employee = DB::table('employee')->where('E_ID', $id)->first();
        // dd($employee);
        return view('Employees.edit')->with('employee', $employee);
    }

    public function update(Request $request, $id)
    {
        if($request->E_E_DepartmentName != null){
            $department = DB::table('department')->where('DE_Name',$request->E_DepartmentName)->first();
            if($department != null){
                $DE_ID = $department->id;
            }else{
                return redirect()->back()->withErrors(['message' => 'Không tìm thấy phòng ban với tên đã cho']);
            }

            $employee =  Employee::where('E_ID', $id)->update([
                'E_FirstName' => $request->input('E_FirstName'),
                'E_Email' => $request->input('E_Email'),
                'E_ContactNumber' => $request->input('E_ContactNumber'),
                'E_Designation' => $request->input('E_Designation'),
                'E_JoinDate' => $request->input('E_JoinDate'),
                'DE_ID' => $DE_ID
            ]);
            // dd($request);
            return redirect('/admin/employees');
        }
        else
        {
            $employee =  Employee::where('E_ID', $id)->update([
                'E_FirstName' => $request->input('E_FirstName'),
                'E_Email' => $request->input('E_Email'),
                'E_ContactNumber' => $request->input('E_ContactNumber'),
                'E_Designation' => $request->input('E_Designation'),
                'E_JoinDate' => $request->input('E_JoinDate'),
                'DE_ID' => $request->input('E_E_DepartmentName')
            ]);
            // dd($request);
            return redirect('/admin/employees');
        }

    }

    public function show(int $id){
        // dd($employee);
        // $employee = Employee::find($id);
        // Hoặc bạn cũng có thể sử dụng query builder nếu cần
        $employee = DB::table('employee')->where('E_ID', $id)->first();
        // dd($employee);
        // dd(Department::where('id',$employee->DE_ID)->first()->DE_Name);
        $employee->E_DepartmentName = Department::where('id',$employee->DE_ID)->first()->DE_Name;
        
        return view('Admin.Employee.show')->with('employee', $employee);
    }
    

    public function destroy($id) {
        // dd($id);
        $employee = Employee::where('E_ID', $id)->delete();
        // dd($guest);
        return redirect('/admin/employees');
    }
}
