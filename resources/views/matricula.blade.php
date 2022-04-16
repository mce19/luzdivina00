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
        
    </div>
</nav>
      <main role="main" class="container-fluid">
  
        <div class="row pb-5"> 
  
          <div class="col-12 col-md-6">
              <h1 class="InfoMatricula">Información de la Persona a Matricular</h1>
              <form>
                  <div class="form-group">
                      <label for="exampleFormControlInput14">Nombre Completo</label>
                      <input type="text" class="form-control" id="NombreAlumno" placeholder="Nombre del alumno">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput14">Cédula</label>
                        <input type="text" class="form-control" id="CedulaAlumno" required
                        minlength="9" maxlength="9" size="9"placeholder="Cédula, sin guiones. Solo Números.">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput14">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="BirthDateAlumno"placeholder="Fecha de Nacimiento del Alumno">
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput14">Edad</label>
                        <input type="number" class="form-control" id="Edad" placeholder="Edad del alumno">
                      </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Sexo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Femenino</option>
                      <option>Masculino</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Provincia Donde Reside</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>San José</option>
                      <option>Alajuela</option>
                      <option>Cartago</option>
                      <option>Heredia</option>
                      <option>Puntarenas</option>
                      <option>Guancaste</option>
                      <option>Limón</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Dirección Detallada de Residencia</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button type="button" class="btn btn-light buttonServices">Enviar</button>
                </form>
          </div>
          
          <div class="col-12 col-md-6">
          <h1 class= "tit-TCU">!Seleccione la Fecha Para Agendar la Cita de Matrícula!</h1>
           <h4> Se deberán presentar uno o ambos padres a la cita, con su Documento de Identificación.</h4>
              <div class="col-10 col-md-10">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput14">Nombre Completo del Tutor Legal</label>
                        <input type="text" class="form-control" id="NombreAlumno" placeholder="Nombre de un tutor legal">
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput14">Cédula</label>
                          <input type="text" class="form-control" id="CedulaAlumno" required
                          minlength="9" maxlength="9" size="9"placeholder="Cédula, sin guiones. Solo Números.">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput14">Contacto Telefónico</label>
                            <input type="text" class="form-control" id="TelPadres" required
                            minlength="8" maxlength="8" size="8"placeholder="Número de Telefono, sin guiones. Solo Números.">
                          </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput14">Fecha de la Cita</label>
                            <input type="date" class="form-control" id="FechaCitaMatricula"placeholder="Fecha de Cita de Matrícula">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Hora de la Cita</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>7:00 AM</option>
                              <option>7:30 AM</option>
                              <option>8:00 AM</option>
                              <option>8:30 AM</option>
                              <option>9:00 AM</option>
                              <option>9:30 AM</option>
                              <option>10:00 AM</option>
                              <option>10:30 AM</option>
                              <option>11:00 AM</option>
                              <option>11:30 AM</option>
                              <option>1:00 PM</option>
                              <option>1:30 PM</option>
                              <option>2:00 PM</option>
                              <option>2:30 PM</option>
                              <option>3:00 PM</option>
                              <option>3:30 PM</option>
                              <option>4:00 PM</option>
                              <option>4:30 PM</option>
                              <option>5:00 PM</option>
                              <option>5:30 PM</option>
                              <option>6:00 PM</option>
                            </select>
                          </div>
                         

                  </form>
                </div>
         </div>
        </div>
      </main>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>

</body>
</html>