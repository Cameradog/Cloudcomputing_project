@extends('layout')
@section('navbar')
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="img/favicon.png" style="width: 24px; height: 24px; display: inline;"> <span>TOEFL Analyzer</span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="nav-all" class="">
          <a href="all">All</a>
        </li>
        <li id="nav-aa" class="">
          <a href="aa">Anthropology & Archaeology</a>
        </li>
        <li id="nav-ar" class="">
          <a href="ar">Art</a>
        </li>
        <li id="nav-as" class="">
          <a href="as">Astronomy</a>
        </li>
        <li id="nav-be" class="">
          <a href="be">Biology & Ecology</a>
        </li>
        <li id="nav-ge" class="">
          <a href="ge">Geology & EarthScience</a>
        </li>
        <li id="nav-sc" class="">
          <a href="sc">Science</a>
        </li>
        <li id="nav-ss" class="">
          <a href="ss">SocialScience</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div>

</div>
@stop
