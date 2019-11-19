<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panel México | Panel Industrial</title>
  <!-- <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}"> -->
  <link rel="shortcut icon" type="image/png" href="favicon.png">
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
</head>

<body class="size-1280 primary-color-light-blue">
  <section class="section background-white">
    <div class="line">
      <div class="margin2x">
        <div class="m-12 l-12">
          <form name="contactForm" class="customform needs-validation" method="post" enctype="multipart/form-data" novalidate>
            {{ csrf_field() }}
            <div class="line">
              <div class="margin">
                <div class="s-12 m-12 l-6">
                  <input id="email" name="email" value="{{ old('email') }}" class="required email" placeholder="correo" title="Your e-mail" type="text" required/>
                </div>
                <div class="s-12 m-12 l-6">
                  <input id="name" name="name" value="{{ old('name') }}" class="name" placeholder="nombre" title="Your name" type="text" />
                </div>
              </div>
            </div> 
            <div class="line">       
              <div class="s-12">

                <textarea id="message" name="message" class="required message" placeholder="comentarios" rows="5" cols="50" type="text" required>texto</textarea>

              </div>            
              <!-- full-name-field is hidden antirobot field -->
              <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
              
              <div class="s-12 button-parent">
                <a class="button rounded-btn background-aqua text-white text-size-12 center margin-top-30 text-strong">ENVIAR</a>
              </div>
              
              <!-- @if (session('precioTotal'))
              <div class="line">
                <p class="padding background-green text-white s-12">{{ session('precioTotal') }}</p>
              </div>
              @endif -->

              <!-- @if ($errors->any())
              <div class="padding background-red text-white s-12">
                <p class="mail-fail form-error">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </p>
              </div>
              @endif -->
                          
            </div>    
          </form>
        </div>
      </div>
    </div>    
  </section>

  <script type="text/javascript" src="js/responsee.js"></script>
  <script type="text/javascript" src="js/plugins.min.js"></script>
  <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/template-scripts.js"></script>

  </body>
</html>