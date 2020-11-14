<!DOCTYPE html>
<html lang="en">
<head>
    <!--Start head-->
    @include('layouts.backend.partials.head')
    <!--End head-->
</head>

<body onload="info_noti()">
    <!--Start logout-->
    @include('includes.logout')
    <!--End logout-->

<!-- Start wrapper-->
 <div id="wrapper">
    <!--Start sidebar-wrapper-->
    @include('layouts.backend.partials.sidebar')
    <!--End sidebar-wrapper-->

    <!--Start header header-->
    @include('layouts.backend.partials.header')
    <!--End header header-->

    <div class="clearfix"></div>

     <div class="content-wrapper">
         <div class="container-fluid">
        <!--Start content-wrapper-->
         @yield('content')
        <!--End content-wrapper-->
         </div>
         <!-- End container-fluid-->
     </div><!--End content-wrapper-->

   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--Start footer-->
	@include('layouts.backend.partials.footer')
	<!--End footer-->
  </div>
<!--End wrapper-->

    <!--Start foot-->
    @include('layouts.backend.partials.foot')
    <!--End foot-->

    @stack('foot')
</body>
</html>
