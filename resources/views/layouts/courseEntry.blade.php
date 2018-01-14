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



 <div class="row">
        <div >



<form class="form-horizontal" method="POST" action="{{url('/insertToEntry')}}" >

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




<div class="col-md-12 ">

    <div class="table-responsive" >
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseCode</th>
                <th style="width:50px;">CourseTitle</th>
                <th>theory-lab</th>
                <th>credit</th>
               
         
            </thead>
            <tbody>
                <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[0]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[0]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>

                <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[1]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[1]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>

                <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[2]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[2]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>



                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[3]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[3]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>



                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[4]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[4]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>


                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[5]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[5]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>





     <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[6]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[6]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[7]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[7]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[8]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[8]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
                        <tr>
                     <td style="width:50px;"><input type="text" class="form-control" name="courseCode[]"></td>
           
                     <td style="width:50px;"><input type="text" class="form-control" name="courseTitle[]"></td>
                     <td style="width:50px;">
        
    
   


   <div class="form-group">
        
    <div class="col-md-6">
  <label><input type="radio" name="TheoryLab[9]" value="Theory">Theory</label>
  <label><input type="radio" name="TheoryLab[9]" value="Lab">Lab</label>
 </div>

</div>

 </td>
                     <td style="width:50px;"><input type="text" class="form-control" name="credit[]"></td>
            
                   </tr>
            </tbody>
        </table>
    </div>

              <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                 Submit
                                </button>
          </div>
          </div>
          </div>
 </fieldset>
</form>
 



</div>
</div>








@endsection


<!--rest of body-->



                  
