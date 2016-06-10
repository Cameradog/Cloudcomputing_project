@extends('navbar')
@section('content')
  <h1>SocialScience</h1>

  <script>
    $(".nav").find(".active").removeClass("active");
    $("#nav-ss").addClass("active");
  </script>
@stop
