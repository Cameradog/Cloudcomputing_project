@extends('navbar')
@section('content')
  <h1>All</h1>

  <script>
    $(".nav").find(".active").removeClass("active");
    $("#nav-all").addClass("active");
  </script>
@stop
