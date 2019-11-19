@extends('layouts.app')

@section('content')
<main role="main">   
  <!-- Header -->
  <!-- <header class="section background-image text-center" style="background-image:url(img/original/industrial_001.jpeg)"> -->
  <header class="section background-image text-center" style="background-image:url(img/reducido/industrial_001.jpeg)">
    <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
      PANEL PARA CUBIERTA
    </h1>
    <!-- <p class="animated-element text-white">Panel para Cubiertas</p> -->
    <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
  </header>

<section class="section background-white">      
  <div class="line text-center">
    <!-- <p class="text-primary text-size-20">Lorem ipsum dolor sit amet</p> -->
    <h2 class="text-dark text-size-50 text-m-size-40">Panel de <b>Cubierta</b></h2>
    <i class="icon-chevron_down text-primary margin-bottom-50 text-size-20"></i> 
  </div> 
  
  <div class="l-12 xl-7 center"> 
    <div class="margin">
      <!-- Left Column -->
      <div class="s-12 m-12 l-4 text-right"> 
        <div class="margin-right-50">
          <i class="animated-element slow icon-sli-diamond text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Composición</h3>
          <p class="animated-element slow" align="justify">Nuestros paneles son prefabricados en línea de producción en continuo, y están compuestos por dos láminas de acero galvanizado y prepintado, unidas por un núcleo de espuma rígida de poliuretano (PUR) o poliisocianurato (PIR).</p>
        </div>
        <div class="line"> 
          <hr class="animated-element slow break background-primary break-small right margin-top-bottom-40">
        </div>
        <div class="margin-right-50">
          <i class="animated-element icon-sli-wrench text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element slow text-strong text-size-20 text-line-height-1 margin-bottom-20">Instalación</h3>
          <p class="animated-element" align="justify">Su instalación es muy sencilla, y gozan de una estanqueidad total (pendientes superiores al 4%).</p>
        </div> 
      </div>
      <!-- Middle Column (carousel)-->
      <div class="s-12 m-12 l-4 margin-top-80">                                                                                        
        <!-- <div class="carousel-default owl-carousel carousel-hide-arrows margin-m-top-bottom-50"> -->
        <div class="carousel-default owl-carousel carousel-hide-arrows">                                                                                              
          <div class="item">                                                                                                                                                                                                     
            <img src="img/adobe02/7-2.jpg"/>                                                                                                                                                              
          </div>              
          <div class="item">                                                                                                                                                                                                                 
            <img src="img/adobe02/9-2.jpg"/>                                                                                                                                                                                                                                                                                                                                                                                     
          </div>                                                                                                                                                  
        </div>
        <a class="button rounded-btn background-aqua text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/cotizador') }}">COTIZAR</a>
        <a class="button rounded-btn background-pink text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/cotizador') }}">DESCARGAR FICHA</a>
        <!-- <div class="s-12 m-12 l-12 margin-bottom">
          <button id="btn2" name="btn2" class="button background-pink border-radius s-12">DESCARGAR FICHA</button>
        </div> -->
      </div> 
      <!-- Right Column -->
      <div class="s-12 m-12 l-4"> 
         <div class="margin-left-50">
          <i class="animated-element icon-sli-bulb text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element slow text-strong text-size-20 text-line-height-1 margin-bottom-20">Uso</h3>
          <p class="animated-element" align="justify">Los paneles MASTER-C  están especialmente diseñados para su utilización en todo tipo de cubiertas, tanto en edificación industrial, como modular o comercial.</p>
        </div>
        
        <div class="line"> 
          <hr class="animated-element break background-primary break-small margin-top-bottom-40">
        </div>
        
        <div class="margin-left-50">
          <i class="animated-element slow icon-sli-layers text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Descripción</h3>
          <p class="animated-element slow" align="justify">MASTER-C  poseen un sistema de unión macho-hembra con tapajuntas de acero que oculta las fijaciones, las protege y garantiza la estanqueidad del sistema.</p>
        </div> 
      </div> 
    </div>                                                                                              
  </div>       
</section>
<br><br>

      
</main>
@endsection