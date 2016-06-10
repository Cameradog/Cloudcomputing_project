@extends('navbar')
@section('content')
  <h1>Art</h1>

  <script>
    $(".nav").find(".active").removeClass("active");
    $("#nav-ar").addClass("active");
  </script>
@stop
