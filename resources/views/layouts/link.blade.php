
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Department of CSE</title>
 <!-- Bootstrap -->


   <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
  
   <link rel="stylesheet" type="text/css" href="{{url('css/select2.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('css/Admin.min.css')}}">
    <script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
   <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/select2.min.js')}}"></script>
     <script type="text/javascript" src="{{url('js/angular.js')}}"></script>

 
  <!--<script src="{{ asset('js/app.js')}}"></script>-->

 <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>


<style type="text/css">
	
	#header{text-align:center;}
	#header p{font-size: 150%;}
</style>
</head>