<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title-block') </title>
	<link rel="stylesheet" href="/css/app.css">
	<!-- <link rel="stylesheet" href="css/catalog.css"> -->
	<!-- <link rel="stylesheet" href="css/detail.css"> -->
  	<!-- <link rel="stylesheet" href="css/stores.css"> -->
  	<!-- <script type="text/javascript" src="/js/jquery-360.min.js"></script> -->

</head>
<body>
	<div class="container">
		@include('inc.tagline')
		@yield('content')
	</div>
</body>
</html>