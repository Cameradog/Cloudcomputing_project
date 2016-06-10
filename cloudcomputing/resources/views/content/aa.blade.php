@extends('navbar')
@section('content')
  <h1>Anthropology & Archaeology</h1>

  <script>
    $(".nav").find(".active").removeClass("active");
    $("#nav-aa").addClass("active");
  </script>
@stop
