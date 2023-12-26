<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::orderBy('id', 'desc')->get();
        // dd($departments);
        return view('Admin.Department.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($request);
        Department::create($data);
        return redirect('/admin/departments');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $department = DB::table('department')->where('id', $id)->first();
        
        return view('Admin.Department.show')->with('department', $department);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $department =  Department::where('id', $id)->update([
            'DE_Name' => $request->input('DE_Name'),
            'DE_Description' => $request->input('DE_Description'),
            'DE_InitialSalary' => $request->input('DE_InitialSalary'),
            'Status' => $request->input('Status')
        ]);

        return redirect('/admin/departments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guest = Department::where('id', $id)->delete();
        
        return redirect('/admin/departments');    
    }
}
