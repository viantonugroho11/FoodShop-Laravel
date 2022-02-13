<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>
  {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/Admin/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset/Admin/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/Admin/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
  @yield('csscode')
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/Admin/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/Admin/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/Admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/Admin/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/Admin/vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	@include('Admin.tools.preloader')
  <div class="header">
  @include('Admin.tools.header')
  </div>
  <div class="right-sidebar">
	@include('Admin.tools.right')
  </div>
  <div class="left-side-bar">
  @include('Admin.tools.left')
  </div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		@yield('content')
	</div>
	<!-- js -->
  @yield('jscode')
	<script src="{{ asset('asset/Admin/vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('asset/Admin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{ asset('asset/Admin/vendors/scripts/process.js')}}"></script>
	<script src="{{ asset('asset/Admin/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{ asset('asset/Admin/src/plugins/apexcharts/apexcharts.min.js')}}"></script>

</body>
</html>