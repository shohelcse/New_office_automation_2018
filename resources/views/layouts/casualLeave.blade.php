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
  @include('layouts.linking')


<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Casual-Leave</div>

                <div class="panel-body">


<!--header of page-->


 <div class="row">
        <div class="col-md-6 col-md-offset-3">



               <form class="form-horizontal" method="POST" action="{{url('/insertToRadding')}}" >
                              {{csrf_field() }}

                            <fieldset>
                              <legend></legend>
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                                  <div class="alert alert-danger">
                                  {{$error}}
                                  </div>
                              @endforeach
                              @endif
                          <!--    <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">Session</label>
                                <div class="col-lg-10">
                                  <input class="form-control" id="inputEmail" placeholder="session" type="text" name="session">
                                </div>
                              </div>

                              -->




                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">File-upload</label>
                                <div class="col-lg-10">
                               <input class="form-control" id="inputEmail" placeholder="semester" type="file" name="">
                                </div>
                              </div>

                            
                              <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                  
                                 <a href="{{url('/home')}}"  class="btn btn-primary">Back</a>
                                </div>
                              </div>
                            </fieldset>
                  </form>

           

</div>
</div>





  
</body>
</html>
