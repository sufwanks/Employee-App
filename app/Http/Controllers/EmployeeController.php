<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $employee = new Employee;
        $employee->employee_name = $request->employee_name;
        $employee->salary = $request->salary;
        $employee->save();
        return response()->json(['message' => 'New Employee Details Added Successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //            
        $employee = Employee::all();
        return response()->json(['employees' => $employee], 200);
    }

    public function filtering($id)
    {
        //            
        $employee = Employee::find($id);
        // return response()->json(['employees' => $employee], 200);

        if ($employee) {
            return response()->json(['employees' => $employee], 200);
        } else {
            return response()->json(['employees' => 'please check the id you have entered'], 404);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $employee = Employee::find($id);
        // return response()->json(['employees' => $employee], 200);

        if ($employee) {
            $employee->employee_name = $request->employee_name;
            $employee->salary = $request->salary;
            $employee->update();
            return response()->json(['employees' => $employee], 200);
        } else {
            return response()->json(['employees' => 'please check the id you have entered'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employee::find($id);
        // return response()->json(['employees' => $employee], 200);

        if ($employee) {

            $employee->delete();
            return response()->json(['message' => 'Deleted'], 200);
        } else {
            return response()->json(['message' => 'please check the id you have entered'], 404);
        }
    }
}
