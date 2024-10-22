<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>माँ ज्वालामुखी चैरिटेबल ट्रस्ट</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="/" class="navbar-brand ml-lg-3">
                <h4 class="m-0 text-uppercase text-primary"><img src="{{asset('img/logo.png')}}" class="mr-3" style="height:50px"></img>माँ ज्वालामुखी चैरिटेबल ट्रस्ट</h4>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <!-- <a href="/" class="nav-item nav-link active">Home</a> -->
                    <!-- <a href="/about" class="nav-item nav-link">About</a> -->
                    <!-- <a href="/courses" class="nav-item nav-link">Courses</a> -->
                    <!-- <a href="/contact" class="nav-item nav-link">Contact</a> -->
                </div>
                <!-- <a href="/contact" class="btn btn-primary py-2 px-4 d-none d-lg-block">संपर्क-करे</a> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')
    @section('main_section')
    @show
    
    <!-- Footer Start -->
  
    <div class="container-fluid bg-dark text-white-50 border-top py-2" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">माँ ज्वालामुखी चैरिटेबल ट्रस्ट</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Maintained by <a class="text-white" href="https://cybertrons.io">Virtual Cybertrons</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
// Add active class to the current button (highlight it)
$(document).ready(function() {
var pathname = window.location.pathname;
console.log(pathname);
$('.nav-link').removeClass('active');
$('.nav-link').each(function() {
    if ($(this).attr('href') == pathname) {
        $(this).addClass("active");
    }
});
});
</script>
  @yield('js')
</body>

</html>