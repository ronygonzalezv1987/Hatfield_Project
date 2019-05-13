@extends('admin.template.main')
@section('title','Edit '.$organization->name)

@section('content')
  {!!Form::open(['route'=>['organizations.update',$organization],'method'=>'PUT'])!!}
     <table  border="1px solid black" width="30%" >
         <tr>
             <td>
       	     <div class="form-group">
     	           {!! Form::label('name','Name') !!}
        	       {!! Form::text('name',$organization->name,['class'=>'form-control','placeholder'=>'Organization name','required']) !!}
             </div>
          </td>
         </tr>

         <tr>
         <td>
             <div class="form-group">
                 {!! Form::label('location','Location') !!}
                 {!! Form::text('location',$organization->location,['class'=>'form-control','placeholder'=>'Location','required']) !!}
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
