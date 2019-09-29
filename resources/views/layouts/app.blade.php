<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>@yield('title')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

       <!-- Page level plugin CSS-->
<link href="{{asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet">
 
  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
 
    


</head>
<body>
    <div id="page-top">

        @include('includes.navbar')




    

        
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
        <!-- Core plugin JavaScript-->

        {{-- <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> --}}
 <script src="{{asset('js/jquery.easing.min.js')}}"></script>

 <!-- Page level plugin JavaScript-->
<script src="{{asset('js/jquery.dataTables.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>

 <!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin.min.js')}}"></script>

 <!-- Demo scripts for this page-->
<script src="{{asset('js/datatables-demo.js')}}"></script>

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>


        <script >
                $("#page-app").ready(function(){
        setTimeout(function(){
            $("#status").remove();
        }, 4000 ); // 5 secs
    
    });
            </script>
        
    </div>
</body>
</html>
