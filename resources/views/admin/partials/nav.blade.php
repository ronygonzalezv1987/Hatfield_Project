
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
          <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>

        <li class="nav-item active">
          <a class="nav-link" href="{{route('organizations.index')}}" >Organization</a>
        </li>
        <li class="nav-item active">
              <a class="nav-link" href="{{route('employees.index')}}">Employees</a>
            </li>

        <li class="nav-item active">
         <a class="nav-link" href="{{route('organizations.show')}}">General_Information</a>
        </li>


      </ul>





    </div>
   </nav>
