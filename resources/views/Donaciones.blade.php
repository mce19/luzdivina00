<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Luz Divina</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/img/LogoLuzDivina.jpg')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{asset('https://use.fontawesome.com/releases/v6.1.0/js/all.js') }}" crossorigin="anonymous"></script>


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{ URL::asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{ URL::asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{ URL::asset('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap')}}" rel="stylesheet"> 

      
         <!-- Icon Font Stylesheet -->
    <link href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
   
    <link href="{{ URL::asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assetslib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

        <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ URL::asset('assets/css/bootstrap.min.css" rel="stylesheet')}}" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('assets/css/style_s.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
          <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('assets/css/style_tres.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style_uno.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style_dos.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/donacion.css')}}" rel="stylesheet">


    </head>
    <body id="page-top">
        <!-- Navigation-->
<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>123 Heredia  San José, Costa Rica</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Horario - Lunes a Viernes de:  07.00 AM - 07.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ url('/welcome_S') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
  <img src="{{URL::asset('assets/img/LogoLuzDivina.jpg')}}"/><h1 class="m-0 text-primary">Luz divina</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="#page-top" class="nav-item nav-link active"></a>
            <a href="#vision" class="nav-item nav-link"> </a>
            <a href="#vision" class="nav-item nav-link"></a>
            <a href="#servicio" class="nav-item nav-link"></a>
            <div class="nav-item dropdown">
             
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ url('/login') }}" class="dropdown-item"></a>
                    <a href="team.html" class="dropdown-item"></a>
                    <a href="team.html" class="dropdown-item"></a>
                
                </div>
            </div>
            <a href="#contacto" class="nav-item nav-link"></a>
        </div>
        <!--<a href="{{ url('/welcome_S') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Volver<i class="fa fa-arrow-right ms-3"></i></a> -->
    </div>
</nav>
<!-- Navbar End -->
<!--Form-->
 <main role="main" class="container-fluid"> 
    <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="/action_page.php">
      
              <div class="row">
             
      
                <div class="col-50">
                  <h3>Donaciones</h3>
                  <label for="fname">Donaciones para la Institución</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Nombre en la Tarjeta</label>
                  <input type="text" id="cname" name="cardname" placeholder="Nombre que aparece en la tarjeta">
                  <label for="ccnum">Numero de la Tarjeta</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Mes</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="Septiembre">
      
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Año</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2022">
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                  </div>
                </div>
      
              </div>
                  <input type="submit" value="Realizar Donación" class="btn">
            </form>
          </div>
        </div>
      

      </div>
  </main>    
    </body>
    </html>