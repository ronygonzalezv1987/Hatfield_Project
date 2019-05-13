@extends('admin.template.main')
@section('title','Edit '.$employee->name)

@section('content')
  {!!Form::open(['route'=>['employees.update',$employee],'method'=>'PUT'])!!}
     <table  border="1px solid black" width="30%" >
         <tr>
             <td>
       	     <div class="form-group">
     	           {!! Form::label('name','Name') !!}
        	       {!! Form::text('name',$employee->name,['class'=>'form-control','placeholder'=>'Full name','required']) !!}
             </div>
          </td>
         </tr>

         <tr>
         <td>
             <div class="form-group">
                 {!! Form::label('title','Title') !!}
                 {!! Form::text('title',$employee->title,['class'=>'form-control','placeholder'=>'Position in the organization','required']) !!}
             </div>
         </td>
         </tr>

         <tr>
            <td>
                <div class="form-group">
                    {!! Form::label('date_hire','Date') !!}
                    {!! Form::text('date_hire',$employee->date_hire,['class'=>'form-control','placeholder'=>'Date of hire','required']) !!}
                </div>
            </td>
            </tr>

         <tr>


           <td>
             <div class="form-group">
         	     {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
             </div>
            </td>
        </tr>
     </table>


  {!!Form::close()!!}
@endsection
