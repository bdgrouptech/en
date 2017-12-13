<!DOCTYPE html>
<html lang="en">


<head>

    @yield('head')

</head>

<body >

@yield('header')
@yield('content')
@yield('footer')




        <!-- jQuery Min
    ==============================================================-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<!-- Bootstrap Js
==============================================================-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Meanmenu Js
==============================================================-->
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>

<!-- Steller Js
==============================================================-->
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>

<!-- Owl Carosel Js
==============================================================-->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

<!-- Custom Js
================================================================-->
<script src="{{ asset('assets/js/main.js') }}"></script>








<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>







</body>

</html>