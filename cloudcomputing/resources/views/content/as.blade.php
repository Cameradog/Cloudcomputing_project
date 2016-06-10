@extends('navbar')
@section('content')
  <h1>Astronomy</h1>

  <script>
    $(".nav").find(".active").removeClass("active");
    $("#nav-as").addClass("active");
  </script>
@stop
