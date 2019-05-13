@extends('admin.template.main')
@section('title','Add employee')
@section('content')
  {!!Form::open(['route'=>'employees.store','method'=>'POST'])!!}
       <table  border="1px solid black" width="30%" >
           <tr>
             <td>
            	 <div class="form-group">
	                 {!! Form::label('name','Name') !!}
    	             {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Employee name','required']) !!}
                   </div>
              </td>
           </tr>

           <tr>
              <td>
                 <div class="form-group">
	                 {!! Form::label('title','Title') !!}
    	             {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Position in the organization','required']) !!}
                 </div>
              </td>
          </tr>

          <tr>
                <td>
                   <div class="form-group">
                       {!! Form::label('date_hire','Date') !!}
                       {!! Form::date('date_hire',null,['class'=>'form-control','placeholder'=>'Date of hire ','required']) !!}
                   </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="form-group">
                        {!! Form::label('organization_id','Organization') !!}
                        {!! Form::select('organization_id',$organizations,null,['class'=>'form-control','placeholder'=>'Organization ','required']) !!}
                    </div>
                </td>
            </tr>

           <tr>
             <td>
                 <div class="form-group">
             	      {!! Form::submit('Register',['class'=>'btn btn-primary']) !!}
                  </div>
               </td>
          </tr>
      </table>
 {!!Form::close()!!}
@endsection
