<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title-block') </title>
	<link rel="stylesheet" href="/css/app.css">
  	<!-- <script type="text/javascript" src="/js/jquery-360.min.js"></script> -->

</head>
<body>
	<div class="container">
		@include('inc.header')
		@include('inc.tagline')

 		@if(!Request::is('/'))
			@include('inc.nav-chain')
		@endif

		@yield('content')
		@include('inc.footer')
	</div>
</body>
</html>