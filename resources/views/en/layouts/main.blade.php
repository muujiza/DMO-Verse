<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta id="token" name="token" value="{{ csrf_token() }}">
	<meta id="domain" name="domain" value="{{ env('APP_DOMAIN') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="copyright" content="Copyright 2015, Comico.my" />
	
	<link href="{{ asset('assets/css/dmo-verse.css') }}" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	@yield('head')
	
</head>
<body>
	@include('layouts.navbar')
	@yield('content')
	
	@include('layouts.footer')	

	<script src="{{ asset('assets/js/dmo-verse.js') }}"></script>
	@yield('foot')

</body>
</html>