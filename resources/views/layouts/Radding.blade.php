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
                <div class="panel-heading">Exam-Schedule</div>

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
       <label for="inputEmail" class="col-lg-2 control-label">Session</label>

             <div class="col-lg-10">  
                     
             <select name="session" class="form-control">
              <option value="2012-13">2009-10</option>
               <option value="2012-13">2010-11</option>
                <option value="2012-13">2011-12</option>
              <option value="2012-13">2012-13</option>
              <option value="2013-14">2013-14</option>
              <option value="2014-15">2014-15</option>
              <option value="2015-16">2015-16</option>
              <option value="2016-17">2016-17</option>
              <option value="2017-18">2017-18</option>
             
              <option selected value="1">choose</option>
              </select>
                                    
                        
                </div>
 </div>



 <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Semester</label>

             <div class="col-lg-10">  
                     
             <select name="semester" class="form-control">
              <option value="1-1">1-1</option>
              <option value="1-2">1-2</option>
              <option value="2-1">2-1</option>
              <option value="2-2">2-2</option>
              <option value="3-1">3-1</option>
              <option value="3-2">3-2</option>
              <option value="4-1">4-1</option>
              <option value="4-2">4-2</option>
              <option selected value="1">choose</option>
              </select>
                                    
                        
                </div>
 </div>



                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">File-upload</label>
                                <div class="col-lg-10">
                               <input class="form-control"  type="file" name="uploadfile">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">Start-date</label>
                                <div class="col-lg-10">
                               <input class="form-control" id="datepicker1" placeholder="start" type="text" name="start">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">End-date</label>
                                <div class="col-lg-10">
                               <input class="form-control" id="datepicker2" placeholder="end" type="text" name="end">
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
