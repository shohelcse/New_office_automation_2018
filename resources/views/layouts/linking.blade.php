<script type="text/javascript" src="{{url('js/jquery.js')}}"></script>
   <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
   <link rel="stylesheet" type="text/css" href="{{url('css/datepicker.css')}}">
    <script type="text/javascript" src="{{url('js/bootstrap-datepicker.js')}}"></script>
      <script>
      $(function(){
       $('#datepicker1').datepicker(
        { format: 'dd/mm/yyyy'});
      });
    </script>
      <script>
      $(function(){
       $('#datepicker2').datepicker({ format: 'dd/mm/yyyy'});
      });
    </script>
