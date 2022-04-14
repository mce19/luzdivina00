<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light" >
        <a class="navbar-brand" href="#"><img src="{{URL::asset('assets/img/LogoLuzDivina.jpg')}}"/> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-md-flex flex-md-row-end" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                  <a class="dropdown-item" href="#">Servicios</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Contacto</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--Carusel-->
      <main role="main" class="container-fluid">
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-touch="false" data-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
           <img src="{{URL::asset('assets/img/Frente.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('assets/img/Zona de Juego.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{URL::asset('assets/img/Hamacas.jpeg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControlsNoTouching" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>

         <!--Bloque dinámico-->
         <div class="col-12 text-center py-5">
            <h1 class="cursiva">Angelitos Luz Divina</h1>
            <h3>Servicios</h3>
          </div>
        </div>
     <div class="row pb-5">
        <div class="col-12 col-md-3">
            <img src="{{URL::asset('assets/img/EntradaPrincipal.jpeg')}}" class="w-100"/>
            <p class="bg-azul text-white px-3 py-2">Atención al Cliente</p>
        </div>
        <div class="col-12 col-md-3">
           <img src="{{URL::asset('assets/img/Cocina.jpeg')}}" class="w-100"/>
           <p class="bg-rojo text-white px-3 py-2">Servicios Profesionales</p>
       </div>
       <div class="col-12 col-md-3">
           <img src="{{URL::asset('assets/img/Murales.jpeg')}}" class="w-100"/>
           <p class="bg-amarillo text-white px-3 py-2">Trabajos Comunales y Prácticas Profesionales</p>
       </div>
       <div class="col-12 col-md-3">
           <img src="{{URL::asset('assets/img/Pasillos.jpeg')}}" class="w-100"/>
           <p class="bg-verde text-white px-3 py-2">Sobre Nosotros</p>
       </div>
    </div>

     <!--Bloque de niños-->

     <div class="row pb-5 "> 

        <div class="col-12 col-md-6">
          <img src="{{URL::asset('assets/img/Kids.png')}}" class="w-100"/>
        </div>
        
        <div class="col-12 col-md-6">
        <h1 class= "tit-kids">!Lo extrardinario está más cerca de lo que crees!</h1>
          <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.<br/> 
            Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor 
            desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
  
       </div>
      </div>

      <!--Fila de blog--> 
      <div class="row p-6 justify-content-between"> 
        <div class="col-12">
            <p class="text-center"> <span class="cursiva font-50px">Lorem</span> ipsum dolor sit amet, consectur adisplidc elit, sed do euidoms </p>
        </div>
        <div class="col-12 col-md-5 bg-blog-1 text-white" data-aos="fade-up">
            <h2>Places you need to visit again</h2>
            <p>by author name</p>
        </div>
        <div class="col-12 col-md-5 bg-blog-2 text-white" data-aos="fade-up">
        <h2>The once in a lifetime experience</h2>
            <p>By author name</p>
        </div>
    </div>


<div class="row pie-pagina">
  <div class="col-12">
    <div class="row">
      <div class="col-12 col-md-6">
        
        <form>
          <h1 class="cursiva" style="text-align: center;">Contacto</h1>
          <div class="form-group">
            <input type="text" class="form-control bg-transparent rounded-0" placeholder="nombre"/>
          </div>
          <div class="form-group">
            <input type="email" class="form-control  bg-transparent rounded-0"  placeholder="Correo"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control  bg-transparent rounded-0"  placeholder="Empresa"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control  bg-transparent rounded-0"  placeholder="Teléfono"/>
          </div>
          <div class="form-group">
            <textarea class="form-control  bg-transparent rounded-0"  placeholder="Mensaje"></textarea>
          </div>
          <button type="submit" class="btn btn-enviar rounded-0 px-4" onclick="validarForm()">Enviar</button>    
        </form>
      </div>
      <div class="col-12 col-md-6">
        <h1 class="titulo-curs">¡Será un Placer Atenderle!</h1>
      </div>
      
      
    </div>
  </div>
</div>
      </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
      AOS.init();
      
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>