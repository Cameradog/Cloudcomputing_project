<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta charset="utf-8">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:600,400,300,100' rel='stylesheet' type='text/css'>
    {!! HTML::style('css/bootstrap/bootswatch.min.css') !!}
    {!! HTML::style('css/font-awesome/font-awesome.min.css') !!}
    {!! HTML::style('css/animate.css') !!}
    {!! HTML::script('js/jquery-2.2.4.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
    {!! HTML::script('js/Chart.bundle.js') !!}

    {!! HTML::style('css/custom.css') !!}
    {!! HTML::script('js/toeicWords.js') !!}
  	<title>TOEFL Analyzer</title>
  </head>
  <body>
    @yield('navbar')
    @yield('content')
  </body>
</html>
