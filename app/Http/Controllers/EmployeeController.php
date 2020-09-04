<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Organisation;
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
        $emps = Employee::allFiltered();

        $emp_sales = Employee::sales()->get();
        $emp_engineer = Employee::engineers()->get();
        
        return view('employee.index',compact('emps','emp_sales','emp_engineer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = New Employee();

        //jobs, org sent through view composer

        return view('employee.create',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, \App\JobIntro\JobIntro $job_intro)
    {
        $data = $this->validateRequest($request);

        $emp = Employee::create($data);       

        return redirect('/employees/' . $emp->id)
            ->with('message','Account Registered - WELCOME ' . $emp->name)
            ->with('wel',$job_intro->showIntro());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $emp = Employee::where('id',$employee->id)->first();
        return view('employee.show',compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $emp = Employee::where('id',$employee->id)->first();

        //jobs, org sent through view composer

        return view('employee.edit',compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $data = $this->validateRequest($request);

        $employee->update($data);

        return redirect('/employees/' . $employee->id)->with('message','Your Account was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $id = $employee->id;

        $employee->forceDelete();
        return redirect('/employees')
            ->with('message','Account (ID: ' . $id . ') Deleted');
    }

    private function validateRequest(Request $request){
        return $request->validate([
            'name' => 'required|alpha_dash',
            'age' => 'required|numeric|min:20',
            'job' => 'required|alpha_dash',
            'organisation_id' => 'required'
        ]);
    }
}
