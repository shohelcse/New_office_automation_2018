@include('layouts.link')
@extends('layouts.designAndLink.app3')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">


<!--header of page-->



<form class="form-horizontal" method="POST" action="{{url('/insertToSession')}}" >

   {{csrf_field() }}
          
                            
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                                  <div class="alert alert-danger">
                                  {{$error}}
                                  </div>
                              @endforeach
                              @endif



<div class="col-md-9 col-md-offset-1">

  <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:50px;" >Session</th>
                 <th style="width:50px;" >Semester</th>
                   <th>Starting-Date</th>
                        <th>Ending-Date</th>
               
         
            </thead>
            <tbody>
                <tr>
                <td style="width:10px;">
                       
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
                         
                      
    </td>
     <td style="width:10px;">
         <select name="session" class="form-control">
              <option value="2012-13">1-1</option>
              <option value="2013-14">1-2</option>
              <option value="2014-15">2-1</option>
              <option value="2015-16">2-2</option>
              <option value="2016-17">3-1</option>
              <option value="2017-18">3-2</option>
              <option value="2016-17">4-1</option>
              <option value="2017-18">4-2</option>
              <option selected value="1">choose</option>
              </select>             
    </td>
                    
     <td style="width:10px;">
     <input type="text" class="form-control" name="staringDate">           
    </td>
     <td style="width:10px;">
     <input type="text" class="form-control" name="endingDate">           
    </td>
            

                   </tr>
            </tbody>
        </table>
    </div>



</div>





              <div class="form-group">
                            <div class="col-md-6 col-sm-offset-5">
                                <button type="submit" class="btn btn-primary">
                                 Submit
                                </button>
          </div>
          </div>
        

</form>
 






<form class="form-horizontal" method="POST" action="{{url('/insertToSession')}}" >

   {{csrf_field() }}
          
                            
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                                  <div class="alert alert-danger">
                                  {{$error}}
                                  </div>
                              @endforeach
                              @endif


<br>
<div class="col-md-9 col-md-offset-1">

  <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
          <thead>
                <th>Session</th>
                <th>Semester</th>
           
                 <th>Starting-Date</th>
                 <th>Ending-Date</th>
                 <th>update</th>
                <th>delete</th>
             </thead>
       

            <tbody>


    
                    
                            
                
 <tr>

   <td>2013-14</td>
   <td>3-2 </td>

   <td>10/06/17</td>
   <td>16/12/17</td>
       
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>
 <tr>

   <td>2012-13</td>
   <td>4-2</td>

   <td>08/08/17</td>
   <td> 05/01/18</td>
       
    <td><a href="" class="label label-success">Update</a> </td>

    <td><a href="" class="label label-danger">Delete</a></td>

 </tr>

 
            </tbody>
        </table>
    </div>



</div>






</form>
 


</div>
</div>



@endsection


<!--rest of body-->



                  
