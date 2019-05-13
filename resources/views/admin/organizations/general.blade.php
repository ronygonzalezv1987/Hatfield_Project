@extends('admin.template.main')

@section('title','List of organizations with their employees')

@section('content')

  @foreach ($organizations as $organization )
      <a>{{$organization->name}} | {{$organization->location}} <br></a>
       @foreach ($organization->Employee as $employee )
         <a>{{$employee->name}} | {{$employee->title}} | Hired on {{$employee->date_hire}} <br></a>
      @endforeach
      <br><br>
  @endforeach


@endsection
