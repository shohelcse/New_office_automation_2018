@include('layouts.header')
@include('layouts.designAndLink.app2')
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                 <!-- Branding Image -->
               
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

       <ul class="nav navbar-nav navbar-left">




<li>@include('layouts.navbar')</li>

</ul>
       
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>





<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Exam-Schedule</div>

                <div class="panel-body">



<table  id="myTable" class="table table-striped table-hover ">
  <thead>
    <tr>

      <th>Session</th>
      <th>Semester</th>
      <th>Download</th>
    
 
    </tr>
  </thead>
  <tbody>
  @if(count($roasters)>0)
  @foreach($roasters->all() as $roaster)
    <tr>
    
      <td>{{$roaster->session}}</td>
      <td>{{$roaster->semester}}</td>
      <td>  
          
        <a href="download/{{$roaster->file}}" >
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-download-alt"></span> Download
        </button>
        </a>
     </td>

 
    </tr>
  

@endforeach
@endif
    
  </tbody>
</table> 


</div>
</div>
</div>
</div>
</div>





    <!-- Scripts -->
  
</body>
</html>
