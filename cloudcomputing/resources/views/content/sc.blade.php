@extends('navbar')
@section('content')
  <h1>Science</h1>

  <script>
    $(".nav").find(".active").removeClass("active");
    $("#nav-sc").addClass("active");
  </script>
@stop
