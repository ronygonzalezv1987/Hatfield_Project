@extends('admin.template.main')
@section('title','Insert Organization')
@section('content')
  {!!Form::open(['route'=>'organizations.store','method'=>'POST'])!!}
       <table  border="1px solid black" width="30%" >
           <tr>
             <td>
            	 <div class="form-group">
	                 {!! Form::label('name','Name') !!}
    	             {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Organization name','required']) !!}
                   </div>
              </td>
           </tr>

           <tr>
              <td>
                 <div class="form-group">
	                 {!! Form::label('location','Location') !!}
    	             {!! Form::text('location',null,['class'=>'form-control','placeholder'=>'City ','required']) !!}
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
