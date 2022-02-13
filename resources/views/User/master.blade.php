<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Home - Manse Korean Grill</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{('asset/User/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{('asset/User/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{('asset/User/assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{('asset/User/assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{('asset/User/assets/css/lightbox.css')}}">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
     {{-- @include('User.tools.preloader') --}}
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    @include('User.tools.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    @yield('konten')

    <!-- ***** About Area Ends ***** -->


    <!-- ***** Footer Start ***** -->

    @include('User.tools.footer')

    <!-- jQuery -->
    <script src="{{('asset/User/assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{('asset/User/assets/js/popper.js')}}"></script>
    <script src="{{('asset/User/assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{('asset/User/assets/js/owl-carousel.js')}}"></script>
    <script src="{{('asset/User/assets/js/accordions.js')}}"></script>
    <script src="{{('asset/User/assets/js/datepicker.js')}}"></script>
    <script src="{{('asset/User/assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{('asset/User/assets/js/waypoints.min.js')}}"></script>
    <script src="{{('asset/User/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{('asset/User/assets/js/imgfix.min.js')}}"></script>
    <script src="{{('asset/User/assets/js/slick.js')}}"></script>
    <script src="{{('asset/User/assets/js/lightbox.js')}}"></script>
    <script src="{{('asset/User/assets/js/isotope.js')}}"></script>

    <!-- Global Init -->
    <script src="{{('asset/User/assets/js/custom.js')}}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });
        @if (session()-> has('success'))
          toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()-> has('error'))
          toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
  </body>
</html>
