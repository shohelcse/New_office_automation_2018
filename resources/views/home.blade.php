
@extends('layouts.designAndLink.app3')
@include('layouts.link')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
  <br>




    <div id="header" class="panel-heading" ><p>Upcoming Exam</p></div>
  
  

<div>

  <table class="table table-striped table-hover ">

    <thead>
      <tr>
         <th>Session</th>
         <th>Semester</th>
          <th>Exam-Type</th>
         <th>Starting-Date</th>
         <th>Ending-Date</th>
         <th>Break-Down</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2013-14</td>
        <td>3-2</td>
        <td>Sessional</td>
        <td>22/11/17</td>
        <td>28/11/17</td>
<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">View</button></td>
        
      </tr>
            <tr>
        <td>2013-14</td>
        <td>3-2</td>
        <td>Theory</td>
        <td>07/12/17</td>
        <td>30/12/17</td>
       <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">View</button></td> 
        
      </tr>
            <tr>
     
      </tr>
            <tr>
     
      </tr>
    </tbody>
  </table>


</div>








<!--modal-->

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sessional Exam</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
  




 <table class="table table-striped table-hover ">
    <thead>
 <tr>
         <th>Date</th>
         <th>Course No</th>
          <th>Course title</th>
         <th>Roll</th>
         <th>Time</th>
         <th>LAB-ROOM</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>
          <tr>
        <td>22-11-17</td>
        <td>CSE-3206</td>
        <td>Artificial Inteligence Sessional</td>
        <td>140101-140128
            Total-26
          </td>
        <td>8.00am-1.00pm</td>
        <td>CSE(ACL) LAB</td>

    </tr>
          <tr>
          <tr>
        <td>25-11-17</td>
        <td>CSE-3204</td>
        <td>Computer Graphics Sessional</td>
        <td>140129-140151
            Total-24
          </td>
        <td>8.00am-1.00pm</td>
        <td>CSE(ACL) LAB</td>

    </tr>
    </tbody>
  </table>




</form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  




<!--modal-->

 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Theory Exam</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
  




 <table class="table table-striped table-hover ">
    <thead>
 <tr>
         <th>Date</th>
         <th>Course No</th>
          <th>Course title</th>
         <th>Roll</th>
         <th>Time</th>
         <th>ROOM-NO</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>
          <tr>
        <td>07-12-17</td>
        <td>CSE-3205</td>
        <td>Artificial Inteligence</td>
        <td>140101-14051
          
          </td>
        <td>1.30pm-4.30pm</td>
        <td>R-302</td>

    </tr>
          <tr>
          <tr>
        <td>11-12-17</td>
        <td>CSE-3204</td>
        <td>Computer Graphics</td>
        <td>140129-140151
            
          </td>
        <td>1.30pm-4.30pm</td>
        <td>R-304</td>

    </tr>
    </tbody>
  </table>




</form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  








<br>

    <div id="header" class="panel-heading" ><p>Upcoming Result</p></div>
  
  

<div>

  <table class="table table-striped table-hover ">

    <thead>
      <tr>
         <th>Session</th>
         <th>Semester</th>
         <th>Starting-Date</th>
         <th>Ending-Date</th>
         <th>Action</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2013-14</td>
        <td>3-2</td>
        <td>10/06/17</td>
         <td>16/12/17</td>
       


     
   <td><button type="button" class="btn btn-info" >Status</button>  
  <button type="button" class="btn btn-info" >Publish</button></td> 
      </tr>
            <tr>
         <td>2012-13</td>
        <td>4-2</td>
        <td>08/08/17</td>
        <td>05/01/18</td>
  <td><button type="button" class="btn btn-info" >Status</button>  
  <button type="button" class="btn btn-info" >Publish</button></td>        
      </tr>
 
 
    </tbody>
  </table>


</div>









</div>
</div>
</div>
</div>
</div>


@endsection

