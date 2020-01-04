@extends('layouts.app')

@section('content')

<main role="main">
  <article>    
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(img/bigStockFoto/4a.jpg)">
      <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
        CONTACTO
      </h1>
      <p class="animated-element text-white">Encuéntranos</p>
      
      <!-- white full width arrow object -->
      <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
    </header>

    
    
    <!-- Section 1 -->
    <section class="section-small-padding background-white text-center">      
      <div class="line">
        <h2 class="text-dark text-size-50 text-m-size-40">¿ Dónde <b>Estamos ?</b></h2>
      </div>                                                                                                    
    </section>
    <section class="section background-white" style="padding: 15px;">
      <div class="line">
        <div class="margin2x">
          <div class="m-12 l-6">
            <div class="margin2x"> 
              
              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">Dirección</h2>                
                  <p>Colina de Buenaventura 47</p>
                  <p>Boulevares, Naucalpan</p>
                  <p>Estado de México, C.P. 53110</p>             
                </div>
              </div>
              
              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>                
                  <p><a class="text-primary-hover" href="mailto:contacto@panelmexico.com">contacto@panelmexico.com</a></p>               
                </div>
              </div>
              
              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">Teléfono</h2>                
                  <p>55 8421 4610</p>            
                </div>
              </div>
            </div>
          </div>
          <div class="m-12 l-6">

            <!-- <form name="contactForm" class="customform ajax-form text-white" method="post" enctype="multipart/form-data"> -->
            <!-- <form name="contactForm" class="customform needs-validation" action="{{ url('/contact2') }}" method="post" enctype="multipart/form-data" novalidate> -->
            <form name="contactForm" class="customform needs-validation" action="{{ url('/contact2') }}" method="post" enctype="multipart/form-data" novalidate>
              {{ csrf_field() }}
              <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input id="email" name="email" value="{{ old('email') }}" class="required email" placeholder="correo" title="Your e-mail" type="text" required/>
                    <!-- <p class="email-error form-error">correo</p> -->
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input id="name" name="name" value="{{ old('name') }}" class="name" placeholder="nombre" title="Your name" type="text" />
                    <!-- <p class="name-error form-error">nombre</p> -->
                  </div>
                </div>
              </div> 

              <div class="line">       
                <div class="s-12">
                  <textarea id="message" name="message" class="required message" placeholder="mensaje" rows="5" cols="50" type="text" required>{{ old('message') }}</textarea>
                  <!-- <p class="message-error form-error">mensaje</p> -->
                </div>
                
                <!-- full-name-field is hidden antirobot field -->
                <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
                <div class="s-12">
                  <div class="g-recaptcha" data-sitekey="6LdLE8wUAAAAAEepO6CsC2zJvWUsp1Hn2Zx96WYW"></div>
                </div>
                <div class="s-12 button-parent">
                  <button class="submit-form button border-radius text-white background-primary" type="submit">Enviar</button>
                </div>
                @if (session('notification'))
                <div class="line">
                  <p class="padding background-green text-white s-12">{{ session('notification') }}</p>
                </div>
                @endif

                @if ($errors->any())
                <div class="padding background-red text-white s-12">
                  <p class="mail-fail form-error">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </p>
                </div>
                @endif       
              </div>    
            </form>

          </div>
        </div>
      </div>    
    </section>
    
  </article>
</main>


@endsection



