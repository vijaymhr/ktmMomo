<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blank Page | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('admin_assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('admin_assets/css/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('admin_assets/css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet">


	<link href="{{asset('admin_assets/css/all-themes.css')}}" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	
		
</head>
    




<body>



	

	@include('admin/inc.header')
	@include('admin/inc.sidebar')
	
        @yield('content')


        <!-- Loading Scripts -->
        



 <!-- Jquery Core Js -->
 <script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>

 <!-- Bootstrap Core Js -->
 <script src="{{asset('admin_assets/js/bootstrap.js')}}"></script>

 <!-- Select Plugin Js -->
 <script src="{{asset('admin_assets/js/bootstrap-select.js')}}"></script>

 <!-- Slimscroll Plugin Js -->
 <script src="{{asset('admin_assets/js/jquery.slimscroll.js')}}"></script>

 <!-- Waves Effect Plugin Js -->
 <script src="{{asset('admin_assets/js/waves.js')}}"></script>

 <!-- Custom Js -->
 <script src="{{asset('admin_assets/js/admin.js')}}"></script>

 <!-- Demo Js -->
 <script src="{{asset('admin_assets/js/demo.js')}}"></script>
</body>

</html>