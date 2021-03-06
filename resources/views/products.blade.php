@extends('layouts.app')

@section('content')
<main role="main">   
  <!-- Header -->
  <!-- <header class="section background-image text-center" style="background-image:url(img/original/industrial_001.jpeg)"> -->
  <header class="section background-image text-center" style="background-image:url(img/bigStockFoto/3a.jpg)">
    <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
      PRODUCTOS
    </h1>
    <p class="animated-element text-white">Cubierta / Fachada / Refrigeración</p>
    <!-- <p class="animated-element text-white">Panel para Cubiertas</p> -->
    <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
  </header>

  

<section class="section background-white" name="acubierta" id="acubierta">        
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
            <img src="img/pmex/cubierta/c1.jpg"/>                                                                                                                                                              
          </div>              
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/cubierta/c2.jpg"/>                                                                                                                                                              
          </div>
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/cubierta/c3.jpg"/>                                                                                                                                                              
          </div>
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/cubierta/c4.jpg"/>                                                                                                                                                              
          </div>
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/cubierta/c5.jpg"/>                                                                                                                                                              
          </div>                                                                                                                                                 
        </div>
        <a class="button rounded-btn background-aqua text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/cotizador') }}">COTIZAR</a>
        <a class="button rounded-btn background-pink text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/downloadC') }}">DESCARGAR FICHA</a>
        <!-- <div class="s-12 m-12 l-12 margin-bottom">
          <button id="btn2" name="btn2" class="button background-pink border-radius s-12">DESCARGAR FICHA</button>
        </div> -->
      </div> 
      <!-- Right Column -->
      <div class="s-12 m-12 l-4"> 
         <div class="margin-left-50">
          <i class="animated-element icon-sli-bulb text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element slow text-strong text-size-20 text-line-height-1 margin-bottom-20">Uso</h3>
          <p class="animated-element" align="justify">Los paneles están especialmente diseñados para su utilización en todo tipo de cubiertas, tanto en edificación industrial, como modular o comercial.</p>
        </div>
        
        <div class="line"> 
          <hr class="animated-element break background-primary break-small margin-top-bottom-40">
        </div>
        
        <div class="margin-left-50">
          <i class="animated-element slow icon-sli-layers text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Descripción</h3>
          <p class="animated-element slow" align="justify">Poseen un sistema de unión macho-hembra con tapajuntas de acero que oculta las fijaciones, las protege y garantiza la estanqueidad del sistema.</p>
        </div> 
      </div> 
    </div>                                                                                              
  </div>       
</section>
<br><br>

<section class="section background-white" name="afachada" id="afachada">      
  <div></div>
  <a>
    <div class="line text-center">
      <!-- <p class="text-primary text-size-20">Lorem ipsum dolor sit amet</p> -->
      <h2 class="text-dark text-size-50 text-m-size-40" >Panel de <b>Fachada</b></h2>
      <i class="icon-chevron_down text-primary margin-bottom-50 text-size-20"></i> 
    </div> 
  </a>

  <div class="l-12 xl-7 center"> 
    <div class="margin">
      <!-- Left Column -->
      <div class="s-12 m-12 l-4 text-right"> 
        <div class="margin-right-50">
          <i class="animated-element slow icon-sli-diamond text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Composición</h3>
          <p class="animated-element slow" align="justify">Nuestros paneles son paneles prefabricados en línea de producción en continuo, y están compuestos por dos láminas de acero galvanizado y prepintado, unidas por un núcleo de espuma rígida de poliuretano o poliisocianurato, formando un elemento tipo sándwich con una junta macho y hembra.</p>
        </div>
        <div class="line"> 
          <hr class="animated-element slow break background-primary break-small right margin-top-bottom-40">
        </div>
        <div class="margin-right-50">
          <i class="animated-element icon-sli-wrench text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element slow text-strong text-size-20 text-line-height-1 margin-bottom-20">Instalación</h3>
          <p class="animated-element" align="justify">Nuestros paneles ofrecen tres acabados exteriores distintos (standard, semiliso y liso) y dos nervados interiores diferentes (standard y liso), así como una amplia gama de colores disponibles.</p>
        </div> 
      </div>
      <!-- Middle Column (carousel)-->
      <div class="s-12 m-12 l-4 margin-top-80">                                                                                        
        <!-- <div class="carousel-default owl-carousel carousel-hide-arrows margin-m-top-bottom-50"> -->
        <div class="carousel-default owl-carousel carousel-hide-arrows">                                                                                              
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/fachada/f1.jpg"/>                                                                                                                                                              
          </div>              
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/fachada/f2.jpg"/>                                                                                                                                                              
          </div>
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/fachada/f3.jpg"/>                                                                                                                                                              
          </div>
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/fachada/f4.jpg"/>                                                                                                                                                              
          </div>
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/fachada/f5.jpg"/>                                                                                                                                                              
          </div>                                                                                                                                                 
        </div>
        <a class="button rounded-btn background-aqua text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/cotizador') }}">COTIZAR</a>
        <a class="button rounded-btn background-pink text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/downloadF') }}">DESCARGAR FICHA</a>
        <!-- <div class="s-12 m-12 l-12 margin-bottom">
          <button id="btn2" name="btn2" class="button background-pink border-radius s-12">DESCARGAR FICHA</button>
        </div> -->
      </div> 
      <!-- Right Column -->
      <div class="s-12 m-12 l-4"> 
         <div class="margin-left-50">
          <i class="animated-element icon-sli-bulb text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element slow text-strong text-size-20 text-line-height-1 margin-bottom-20">Uso</h3>
          <p class="animated-element" align="justify">Están especialmente diseñados para su utilización en todo tipo de fachadas, tanto en proyectos de edificaciones industriales, como comerciales o residenciales. Se pueden instalar en posición tanto vertical como horizontal, garantizando siempre una estanqueidad total. El diseño del solape está concebido para ocultar y proteger las fijaciones, lo que le otorga una excelente estética.</p>
        </div>
        
        <div class="line"> 
          <hr class="animated-element break background-primary break-small margin-top-bottom-40">
        </div>
        
        <div class="margin-left-50">
          <i class="animated-element slow icon-sli-layers text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Descripción</h3>
          <p class="animated-element slow" align="justify">Los paneles de fachada ofrecen la posibilidad de fabricar paneles con espuma PIR (poliisocianurato) autoextinguible con certificación B-s1, d0 según Euroclases (UNE-EN 13501).</p>
        </div> 
      </div> 
    </div>                                                                                              
  </div>       
</section>
<br><br>

<section class="section background-white" name="arefrigeracion" id="arefrigeracion">        
  <div class="line text-center">
    <!-- <p class="text-primary text-size-20">Lorem ipsum dolor sit amet</p> -->
    <h2 class="text-dark text-size-50 text-m-size-40">Panel de <b>Refrigeración</b></h2>
    <i class="icon-chevron_down text-primary margin-bottom-50 text-size-20"></i> 
  </div> 
  
  <div class="l-12 xl-7 center"> 
    <div class="margin">
      <!-- Left Column -->
      <div class="s-12 m-12 l-4 text-right"> 
        <div class="margin-right-50">
          <i class="animated-element slow icon-sli-diamond text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Composición</h3>
          <p class="animated-element slow" align="justify">Son paneles prefabricados en línea de producción en continuo, y están compuestos por dos láminas de acero galvanizado y prepintado, unidas por un núcleo de espuma rígida de poliuretano (PUR) o poliisocianurato (PIR), formando un elemento tipo sándwich con una junta macho y hembra.</p>
        </div>
        <div class="line"> 
          <hr class="animated-element slow break background-primary break-small right margin-top-bottom-40">
        </div>
        <div class="margin-right-50">
          <i class="animated-element icon-sli-wrench text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element slow text-strong text-size-20 text-line-height-1 margin-bottom-20">Instalación</h3>
          <p class="animated-element" align="justify">Están especialmente diseñados para su utilización en todo tipo de proyectos relacionados con la industria agroalimentaria, desde el transporte, manipulación y conservación, hasta la congelación y ultracongelación de los alimentos.</p>
        </div> 
      </div>
      <!-- Middle Column (carousel)-->
      <div class="s-12 m-12 l-4 margin-top-80">                                                                                        
        <!-- <div class="carousel-default owl-carousel carousel-hide-arrows margin-m-top-bottom-50"> -->
        <div class="carousel-default owl-carousel carousel-hide-arrows">                                                                                              
          <div class="item">                                                                                                                                                                                                     
            <img src="img/pmex/frigorifico/fr1.jpg"/>                                                                                                                                                              
          </div>              
          <div class="item">                                                                                                                                                                                                                 
            <img src="img/pmex/frigorifico/fr2.jpg"/>                                                                                                                                                                                                                                                                                                                                                                                     
          </div>
          <div class="item">                                                                                                                                                                                                                 
            <img src="img/pmex/frigorifico/fr5.jpg"/>                                                                                                                                                                                                                                                                                                                                                                                     
          </div>

        </div>
        <a class="button rounded-btn background-aqua text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/cotizador') }}">COTIZAR</a>
        <a class="button rounded-btn background-pink text-white text-size-12 center margin-top-30 text-strong" href="{{ url('/downloadR') }}">DESCARGAR FICHA</a>
        <!-- <div class="s-12 m-12 l-12 margin-bottom">
          <button id="btn2" name="btn2" class="button background-pink border-radius s-12">DESCARGAR FICHA</button>
        </div> -->
      </div> 
      <!-- Right Column -->
      <div class="s-12 m-12 l-4"> 
         <div class="margin-left-50">
          <i class="animated-element icon-sli-bulb text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element slow text-strong text-size-20 text-line-height-1 margin-bottom-20">Uso</h3>
          <p class="animated-element" align="justify">Se ofrecen diferentes configuraciones en función del proyecto al que van destinados, pudiendo elegir entre seis espesores distintos, tres nevados exteriores y dos nervados interiores diferentes, así como una amplia gama de colores disponibles.</p>
        </div>
        
        <div class="line"> 
          <hr class="animated-element break background-primary break-small margin-top-bottom-40">
        </div>
        
        <div class="margin-left-50">
          <i class="animated-element slow icon-sli-layers text-primary text-size-40 margin-bottom-20"></i>
          <h3 class="animated-element text-strong text-size-20 text-line-height-1 margin-bottom-20">Descripción</h3>
          <p class="animated-element slow" align="justify">Los paneles se pueden fabricar paneles con espuma PIR (poliisocianurato) autoextinguible con certificación B-s1, dO según Euroclases (UNE-EN 13501).</p>
        </div> 
      </div> 
    </div>                                                                                              
  </div>       
</section>
<br><br>

      
</main>
@endsection