@extends('navbar')
@section('content')
  <h1>Biology & Ecology</h1>

  <script>
    $(".nav").find(".active").removeClass("active");
    $("#nav-be").addClass("active");
  </script>
@stop
