<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<style type="text/css">
		table,td{font-family:微软雅黑;text-align:center;}
		h3{font-family:微软雅黑;}
	</style>
	<script type="text/javascript" src="/bs/js/jquery.min.js"></script>
	<script type="text/javascript" src="/bs/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/bs/css/bootstrap.min.css">
</head>
<body>
	<center>
		@include('news.menu')

		<h3>@yield('h3')</h3>
			@section('content')

			@show
		
	</center>	
</body>
</html>