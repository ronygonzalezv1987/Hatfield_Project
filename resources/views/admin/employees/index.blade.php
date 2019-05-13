@extends('admin.template.main')

@section('title','List of employees')

@section('content')

 <a href="{{ route('employees.create') }} " class="btn btn-info">Register new employee</a>
  <table class="table table-striped table-bordered  ">
      <thead>
           <th>Name</th>
           <th>Title</th>
           <th>Date_Hire</th>
           <th>Organization</th>
           <th>Action</th>
      </thead>
      <tbody>
         <tr>
             @foreach ($employees as $employee )
             <tr>
                 <td>{{$employee->name}}</td>
                 <td>{{$employee->title}}</td>
                 <td>{{$employee->date_hire}}</td>
                 <td>{{$employee->organization->name}}</td>
                 <td>
                     <a  class="btn btn-warning" href="{{route('employees.edit',$employee->id)}}" >
                          <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                      </a>
                     <a  class="btn btn-danger" href="{{route('employees.destroy',$employee->id)}}" onclick="return confirm('Are you sure you want delete the organization?')">
                         <span class="glyphicon glyphicon-remove-circle"  aria-hidden="true"></span>
                     </a>
                 </td>
             </tr>
             @endforeach
            </tr>
       </tbody>
    </table>
 {!!$employees->render()!!}

@endsection
