<?php

namespace App\Http\Controllers;
use Http\Requests;
use Illuminate\Http\Request;

use Laracasts\Flash\Flash;
use App\Http\Controllers\Controller;
use App\Organization;
use App\Http\Requests\OrganizationRequest;


class organizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $allOrganizations=Organization::orderBy('id','ASC')->paginate(4);
      return view('admin.organizations.index')->with('organizations',$allOrganizations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organizations.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(organizationRequest  $request)
    {
      $organization= new Organization($request->all());
      $organization->save();
      Flash::success("The organization ".$organization->name." has been registered correctly!");
      return redirect()->route('organizations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $organizations=Organization::orderBy('name','ASC')->get();
       $organizations->each(function($organizations){
            $organizations->employee;
        });
       return view('admin.organizations.general')->with('organizations',$organizations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $organization= Organization::find($id);
      return view('admin.organizations.edit')->with('organization',$organization);
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
        $organization=Organization::find($id);

        $organization->fill($request->all());
        $organization->save();
        Flash::warning("The organization ".$organization->name." has been update correctly!");
        return redirect()->route('organizations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organization=organization::find($id);
        $organization->delete();
        Flash::error("The organization ".$organization->name." has been deleted correctly!");
        return redirect()->route('organizations.index');

    }


}

