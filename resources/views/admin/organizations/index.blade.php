@extends('admin.template.main')

@section('title','List of organizations')

@section('content')
  <a href="{{ route('organizations.create') }} " class="btn btn-info">Register new Organization</a>
  <table class="table table-striped table-bordered  ">
      <thead>
           <th>ID</th>
           <th>Name</th>
           <th>Location</th>
           <th>Action</th>
      </thead>
     <tbody>
         <tr>
             @foreach ($organizations as $organization )
               <tr>  <td>{{$organization->id}}</td>
                 <td>{{$organization->name}}</td>
                 <td>{{$organization->location}}</td>
                 <td>
                     <a  class="btn btn-warning" href="{{route('organizations.edit',$organization->id)}}" >
                          <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                      </a>
                     <a  class="btn btn-danger" href="{{route('organizations.destroy',$organization->id)}}" onclick="return confirm('Are you sure you want delete the organization?')">
                         <span class="glyphicon glyphicon-remove-circle"  aria-hidden="true"></span>
                     </a>
                 </td>
                </tr>
                @endforeach
           </tr>
       </tbody>
    </table>
 {!! $organizations->render()!!}

@endsection
