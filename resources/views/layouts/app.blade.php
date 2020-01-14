<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panel México | Panel Industrial</title>
    <!-- <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"> -->
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
    <script type="text/javascript" src="js/validation.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {!! htmlScriptTagJsApi(['action' => 'homepage']) !!}
    
  </head>

  <body class="size-1280 primary-color-light-blue">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
          <div class="logo hide-l hide-xl hide-xxl">
            <a href="index.html" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logoAbeja_002.svg" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logoAbeja_001.svg" alt="">
            </a>
          </div>                  
          <p class="nav-text"></p>
          <!-- left menu items -->
          <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
                <li>
                  <a href="{{ url('/') }}">Nosotros</a>
                </li>
                <li> 
                  <a>Productos</a>
                  <ul>
                    <li><a href="/fachada#acubierta">Panel de Cubierta</a></li>
                    <li><a href="/fachada#afachada">Panel de Fachada</a></li>
                    <li><a href="/fachada#arefrigeracion">Panel de Refrigeración</a></li>
                  </ul>
                </li>
             </ul>
          </div>
          <!-- logo -->
          <ul class="logo-menu">
            <a href="{{ url('/') }}" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logoAbeja_002.svg" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logoAbeja_001.svg" alt="">
            </a>
          </ul>
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
                <li><a href="{{ url('/cotizador') }}">Cotizador</a></li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
             </ul> 
          <!-- <div style="float: right"><p style="padding-right: 10px" color:"white">texto</p></div> -->
          </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      @yield('content')    
    </main>
    
    <!-- Social -->
    <!-- <div class="background-primary padding text-center">
      <a href="/"><i class="icon-facebook_circle text-size-25 text-blue"></i></a> 
      <a href="/"><i class="icon-instagram_circle text-size-25 text-blue"></i></a> 
      <a href="/"><i class="icon-linked_in_circle text-size-25 text-blue"></i></a>                                                                       
    </div> -->
    <!-- FOOTER -->
    <footer>
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
            <div class="s-12 m-6 l-3 xl-5">
               <h4 class="text-white text-strong">Nuestra Misión</h4>
               <p>
                 <b class="text-size-20">Generar bienestar</b> para nuestros clientes y colaboradores mediante la oferta de paneles, <b class="text-size-20">de alta calidad</b>, para el sector industrial. 
               </p>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Links</h4>      
               <a class="text-primary-hover" href="{{ url('/contacto') }}">Contacto</a><br>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Términos de Uso</h4>
               <a class="text-primary-hover" href="page.html">Términos y Condiciones</a><br>
            </div>
            <div class="s-12 m-6 l-3 xl-3">
               <h4 class="text-white text-strong margin-m-top-30">Contacto CDMX</h4>
                <p><i class="icon-sli-screen-smartphone text-primary"></i> 55 8421 4610</p>
                <a class="text-primary-hover" href="mailto:contacto@panelmexico.mx"> <i class="icon-sli-mouse text-primary"> </i> contacto@panelmexico.com</a><br>
                <a class="text-primary-hover" href="mailto:proyectos@panelmexico.mx"> <i class="icon-sli-mouse text-primary"> </i> proyectos@panelmexico.com</a>
            </div>
          </div>  
        </div>    
      </section>
      <div class="background-dark">
         <div class="line">
            <hr class="break margin-top-bottom-0" style="border-color: #777;">
         </div>
      </div>
      <!-- Bottom Footer -->
      <section class="padding-2x background-dark full-width">
        <div class="line">
          <div class="s-12 l-6">
            <p class="text-size-12">Copyright 2019, Orange Code Design - Madrid</p>
            <!-- <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p> -->
          </div>
          <div class="s-12 l-6">
            <a class="right text-size-12 text-primary-hover" title="Responsee - lightweight responsive framework">Design and coding<br> by Orange Code</a>
          </div>
        </div>  
      </section>
    </footer>
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script>
    // <script type="text/javascript" src="js/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAUPovi8jPa1hqtnt7_0Gdis-DSRAhepS4&callback=initMap"></script> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-12000920-50"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-12000920-50');
    </script>
  </body>
</html>