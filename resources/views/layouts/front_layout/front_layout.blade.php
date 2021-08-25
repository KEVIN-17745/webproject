<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> KK Lab</title>

    <link rel="shortcut icon" href="{{url('frontend/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/assets/css/style.css')}}" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    @include('layouts.front_layout.front_header')
    
    
     <!-- ################# Slider Starts Here#######################--->

     @yield('content')
    
    <!-- ################# Footer Starts Here#######################--->

    @include('layouts.front_layout.front_footer')
    
    
    </body>

<script src="{{url('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>

<script src="{{url('frontend/assets/js/script.js')}}"></script>


</html>