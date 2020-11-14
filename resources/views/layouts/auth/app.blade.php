<!DOCTYPE html>
<html lang="en">

<head>
    <!--Start head-->
    @include('layouts.auth.partials.head')
    <!--End head-->
</head>
<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	@yield('content')
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
 <!--Start foot-->
 @include('layouts.auth.partials.foot')
 <!--End foot-->
</body>

</html>
