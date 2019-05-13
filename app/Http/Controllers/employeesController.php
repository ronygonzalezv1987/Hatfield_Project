<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Organization;
use App\Employee;
use Laracasts\Flash\Flash;
use App\Http\Requests\EmployeeRequest;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employees=Employee::orderBy('id','ASC')->paginate(4);
      $employees->each(function($employees){
          $employees->organization;
        });
      return view('admin.employees.index')->with('employees',$employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations=Organization::orderBy('name','ASC')->pluck('name','id');
        $employees=Employee::orderBy('name','ASC')->get();
        return view('admin.employees.create')
              ->with('organizations',$organizations)
              ->with('employees',$employees);
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest  $request)
    {
      $employee= new Employee($request->all());
      $employee->save();
      Flash::success("The employee ".$employee->name." has been registered correctly!");
      return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $employee= Employee::find($id);
      return view('admin.employees.edit')->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee=Employee::find($id);
        $employee->fill($request->all());
        $employee->save();
        Flash::warning("The organization ".$employee->name." has been update correctly!");
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employee::find($id);
        $employee->delete();
        Flash::error("The employee ".$employee->name." has been deleted correctly!");
        return redirect()->route('employees.index');
    }
}
