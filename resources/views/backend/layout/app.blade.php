<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dashboard</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="{{asset('backend/assets/plugins/fontawesome/js/all.min.js')}}"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="{{asset('backend/assets/css/portal.css')}}">
@yield('styles')
</head>

<body class="app">
	@include('backend.includes.header')
	<div class="app-wrapper">
	@yield('content')
	</div>
	<!-- Javascript -->
	<script src="{{asset('backend/assets/plugins/popper.min.js')}}"></script>
	<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- Page Specific JS -->
	<script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>

</html>