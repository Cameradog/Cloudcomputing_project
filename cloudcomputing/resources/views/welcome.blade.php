@extends('layout')
@section('content')
<div class="container-fluid">
  <div class="text-center welcome">
    <div class="fadeInDown animated">
      <div id="welcome-pic">
        <img class="rotateIn animated" src="img/favicon.png" style="width: 128px; height: 128px;">
      </div>
    </div>
    <h1 class="title-word fadeInUp animated">Welcome to TOEFL Analyzer</h1>
    <div class="fadeInUp animated">
      <h3 class="title-inst">Please choose a category to start</h3>
      <a class="title-btn btn btn-default fadeInUp animated" href="all">All</a>
      <a class="title-btn btn btn-default fadeInUp animated" href="aa">Anthropology & Archaeology</a>
      <a class="title-btn btn btn-default fadeInUp animated" href="ar">Art</a>
      <a class="title-btn btn btn-default fadeInUp animated" href="as">Astronomy</a>
      <a class="title-btn btn btn-default fadeInUp animated" href="be">Biology & Ecology</a>
      <a class="title-btn btn btn-default fadeInUp animated" href="ge">Geology & EarthScience</a>
      <a class="title-btn btn btn-default fadeInUp animated" href="sc">Science</a>
      <a class="title-btn btn btn-default fadeInUp animated" href="ss">SocialScience</a>
    </div>
  </div>
</div>

<script type="text/javascript">
  var wPic = $('#welcome-pic');
  window.onload = function(){
    setInterval(function() {
      anime();
    },2000);
  }

  function anime() {
    $('#welcome-pic').removeClass().addClass('bounce animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  }
</script>
@stop
