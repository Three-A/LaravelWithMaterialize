<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TODO | @yield('title')</title>
    
    <link rel="stylesheet"  href="{{asset('materialize/css/materialize.min.css')}}">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
</head>
<body>
    @section('navbar')
        @include('layouts.navbar')
    @show

    <div class="container"><!-- biar ada jarak dengan frame terluar -->
        @yield('content')
    </div>

    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>

      <script type="text/javascript">
            $( document ).ready(function(){
                $(".button-collapse").sideNav();
            })
            </script>
</body>
</html>