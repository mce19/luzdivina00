<!DOCTYPE html>
<html lang="es">
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


        <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
       
      
          <!-- Customized Bootstrap Stylesheet -->

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('assets/css/style_tres.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style_uno.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style_dos.css')}}" rel="stylesheet">


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
      <a href="#page-top" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img src="{{URL::asset('assets/img/LogoLuzDivina.jpg')}}"/><h1 class="m-0 text-primary">Luz divina</h1>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
                  </div>
              </div>
             
          </div>
          <a href="/welcome_S" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">volver<i class="fa fa-arrow-right ms-3"></i></a>
      </div>
  </nav>
  <!-- Navbar End -->

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border border-info rounded-pill py-2 px-3">Matricula</p>
                  
                </div>
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <h1 class="mb-4">Ingrese los datos del niño</h1>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <label for="exampleFormControlInput14">Nombre</label>
                                    <input type="text" class="form-control border-0" placeholder="Escriba el nombre" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <label for="exampleFormControlInput14">Cédula</label>
                                    <input type="email" class="form-control border-0" placeholder="Escriba la cédula" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <label for="exampleFormControlInput14">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="BirthDateAlumno"placeholder="#">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <label for="exampleFormControlInput14">Edad</label>
                                    <input type="email" class="form-control border-0" placeholder="Escriba la edad" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <label for="exampleFormControlSelect1">Género</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Femenino</option>
                                      <option>Masculino</option>
                                      <option>Otros</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <br>
                                    <label for="exampleFormControlSelect1">Provincia donde reside</label>
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Provincia</option>
                                        <option value="1">San josé</option>
                                        <option value="2">Alajuela</option>
                                        <option value="3">Cartago</option>
                                        <option value="3">Heredia</option>
                                        <option value="3">Puntarenas</option>
                                        <option value="3">Guanacaste</option>
                                        <option value="3">limón</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="col-12">
                                        <label for="exampleFormControlTextarea1">Dirección Detallada de Residencia</label>
                                        <textarea class="form-control border-0" rows="5" placeholder="Describa"></textarea>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="col-12">
                                <br>
                                <h2 class="mb-0">Datos del encargado</h2>
                                <br>
                            </div>
                            <br>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <br>
                                        <label for="exampleFormControlInput14">Nombre completo</label>
                                        <input type="text" class="form-control border-0" placeholder="Escriba el nombre" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <br>
                                        <label for="exampleFormControlInput14">Cédula</label>
                                        <input type="email" class="form-control border-0" placeholder="Escriba la cédula" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <br>
                                        <label for="exampleFormControlInput14">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" id="BirthDateAlumno"placeholder="#">
                                    </div>
                                    
                                    <div class="col-12 col-sm-6">
                                        <br>
                                        <label for="exampleFormControlSelect1">Hora de la Cita</label>
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option selected>Hora</option>
                                            <option value="1">7:00 AM</option>
                                            <option value="2">7:30 AM</option>
                                            <option value="3">8:00 AM</option>
                                            <option value="4">8:30 AM</option>
                                            <option value="5">9:00 AM</option>
                                            <option value="6">9:30 AM</option>
                                            <option value="7">10:00 AM</option>
                                            <option value="8">10:30 AM</option>
                                            <option value="9">11:00 AM</option>
                                           <option value="10">11:30 AM</option>
                                           <option value="11">1:00 PM</option>
                                           <option value="12">1:30 PM</option>
                                           <option value="13">2:00 PM</option>
                                           <option value="14">2:30 PM</option>
                                           <option value="15">3:00 PM</option>
                                           <option value="16">3:30 PM</option>
                                           <option value="17">4:00 PM</option>
                                           <option value="18">4:30 PM</option>
                                           <option value="19">5:00 PM</option>
                                           <option value="20">5:30 PM</option>
                                           <option value="21">6:00 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    
<!-- Footer Start -->
 <footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Ubicación</h4>
                <p class="lead mb-0">
                    Heredia San José, Costa Rica
                    <br />
                    
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Nuestras redes sociales</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
  
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Mas sobre nosotros</h4>
                <p class="lead mb-0">
                    Una pequeña historia en nuestro primero blog creado en el 2012, para vicitarlo preciones el link.
                    <a href="{{ URL::asset('http://asofeluzdivina.blogspot.com/')}}">Nuestro Primer blog</a>
                    .
                </p>
            </div>
        </div>
    </div>
  </footer>
  <!-- Footer End -->
  
   
</body>

</html>