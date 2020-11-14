<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="description" content="Application description" />
<meta name="author" content="Application author" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@stack('title') | Application name </title>

<!--favicon-->
<link rel="icon" href="{{ asset('assets/backend/images/favicon.ico') }}" type="image/x-icon">
<!-- simplebar CSS-->
<link href="{{ asset('assets/backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet"/>
<!-- animate CSS-->
<link href="{{ asset('assets/backend/css/animate.css') }}" rel="stylesheet" type="text/css"/>
<!-- Icons CSS-->
<link href="{{ asset('assets/backend/css/icons.css') }}" rel="stylesheet" type="text/css"/>
<!-- Sidebar CSS-->
<link href="{{ asset('assets/backend/css/sidebar-menu.css') }}" rel="stylesheet"/>
<!-- Custom Style-->
<link href="{{ asset('assets/backend/css/app-style.css') }}" rel="stylesheet"/>
<!--SweetAlert 2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--====== AJAX ======-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@stack('head')
