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



<form class="form-horizontal" method="POST" action="{{url('/insertCourseTracking')}}" >

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



<div class="col-md-6 col-md-offset-2">

  <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th style="width:50px;" >session</th>
                <th  style="width:50px;">semester</th>
               
         
            </thead>
            <tbody>
                <tr>
                <td style="width:10px;">
        <select name="session" class="form-control">
           
                   <option selected value="1">choose</option>
                    @foreach($data as $d)
                      <option>{{$d->session}}</option>
                            
                   @endforeach
                            </select>
             
          



    </td>
           
                    
                     <td style="width:10px;">
        
    
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
                         
 </td>
                    
            

                   </tr>
            </tbody>
        </table>
    </div>



</div>





              <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                 Submit
                                </button>
          </div>
          </div>
        

</form>
 



</div>
</div>








@endsection


<!--rest of body-->



                  
