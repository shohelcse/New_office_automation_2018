

<nav class="navbar nav-pills nav-stacked">
  <div class="container-fluid">
  
  
    
  

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <a class="navbar-brand" href='{{url("/home")}}'>Home</a>
     <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manage<span class="caret"></span></a>

                    <ul class="dropdown-menu multi-level">
                       







    <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic</a>
                            <ul class="dropdown-menu">
              <li><a href='{{url("/sessionCreate")}}'>Session</a></li>
                        <li><a href='{{url("/semesterCreate")}}'>Semester</a></li>
                        <li><a href='{{url("/semesterDetails")}}'>Semester-Details</a></li>

                            </ul>
                        </li>








                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                            <ul class="dropdown-menu">
              <li><a href='{{url("/courseEntry")}}'>Entry</a></li> 
               <li><a href='{{url("/courseAssignSession")}}'>Assign</a></li>
                                   <li><a href='{{url("/courseTrackingSession")}}'>Tracking</a></li>
                        
                            </ul>
                        </li>
                    </ul>
                </li>
                



   <li class="dropdown">
          <a href='{{url("/home")}}' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academic-Schedule<span class="caret"></span></a>

                    <ul class="dropdown-menu multi-level">
                     <li><a href='{{url("/Rshow")}}'>Show-Duties</a></li>
                        <li><a href='{{url("/Radding")}}'>Exam-Plan</a></li>
                       
                 
                    </ul>
                </li>


          <!--        <li><a href='{{url("/roasterduty")}}'>Roaster duty</a></li> -->
         <li><a href='{{url("/casualLeave")}}'>Casual leave</a></li>
            </ul>


</nav>