@extends('layouts.app')

@section('content')
<!-- MAIN -->
<main role="main">

  <article>    
    <!-- Header -->
    <!-- <header class="section background-image text-center" style="background-image:url(img/original/ahorro_001.jpeg)"> -->
    <header class="section background-image text-center" style="background-image:url(img/reducido/ahorro02.jpg)">
      <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
        AHORRO
      </h1>
      <p class="animated-element text-white">Expertos en Ahorros Energéticos</p>
      <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
    </header>
    <!-- Section 1 -->
    <section class="section-small-padding background-white text-center">      
      <div class="line">
        <!-- https://www.myresponsee.com/responsive-framework-doc/font-icon-set/ -->
        <!-- <i class="icon-sli-info text-primary text-size-40"></i> -->
        <h2 class="text-dark text-size-50 text-m-size-40">¿ Cuánto <b>Cuesta ?</b></h2>
      </div>                                                                                                    
    </section>

    <a href="mensajeEnviar" id="mensajeEnviar">
      <div class="margin2x">
      @if (session('notification'))
        <div class="padding text-left" style="background-color:#F0FFF0">
          <!-- <div class="alert alert-success"> -->
          <ul>
            <li style="color:#008000">{{ session('notification') }}</li>
          </ul>
        </div>
      @endif
      @if ($errors->any())
        <div class="padding text-left" style="background-color:#FFE4E1">
        <!-- <div class="alert alert-danger"> -->
          <ul>
            @foreach ($errors->all() as $error)
              <li style="color:#8B0000">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      </div>
    </a>

    <section class="section background-white">
      <div class="line">
        <div class="margin2x">
          <div class="m-12 l-6">          
            <h2 class="text-size-20 margin-bottom-10 margin-m-top-50 text-strong">Por favor ingrese los siguientes datos:</h2>
            <form name="contactForm" class="customform" method="post" action="{{ url('/precio') }}" enctype="multipart/form-data">
              <!-- {{ csrf_field() }} -->
              <!-- <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-12">
                    <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                    <p class="name-error form-error">Please enter your name.</p>
                  </div>
                  <div class="s-12 m-12 l-12">
                    <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    <p class="email-error form-error">Please enter your e-mail.</p>
                  </div>
                </div>
              </div> -->               
              <div class="line">       
                <div class="s-12">
                  <select id="use" name="use" onchange="ChangeUseList(); myFunction()" class="form-control required">
                    <option value="" selected data-default>Uso</option>
                    <option value="cubierta">cubierta</option>
                    <option value="fachada">fachada</option>
                    <option value="refrigeracion">refrigeración</option>
                  </select>
                </div>
                <div class="s-12">
                  <select id="thickness" name="thickness" class="form-control required" onchange="myFunction()">
                    <option value="" selected data-default>Espesor</option>
                  </select>
                </div>
                <div class="s-12">
                  <input id="cantidad" oninput="myFunction()" name="cantidad" class="form-group required" placeholder="cantidad [m2]">
                </div>
                <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
              </div>
                  
            </form>
          </div>

          <div class="m-12 l-6">
              <div class="line">
                <div class="l-12 xl-9 center">
                  <div class="s-12 m-12 l-12"> 
                    <div class="animated-element pricing-recommended pricing-table margin-bottom-30">
                      <!-- @if (session('cantidad'))
                        <p class="pricing-price text-dark text-strong margin-bottom-10 text-center">$ <span id="price" class="timer" data-from="0" data-to="{{ session('cantidad') }}" data-speed="2000" data-decimals="2"></span> MXN</p>
                      @else
                        <p class="pricing-price text-dark text-strong margin-bottom-10 text-center">$ <span id="price" class="timer" data-from="0" data-to="0" data-speed="2000" data-decimals="2"></span> MXN</p>
                      @endif -->
                      <p id="p01" name="p01" class="pricing-price text-dark text-strong margin-bottom-10 text-center"> 
                        <span id="price" name="price">0.00</span> MXN
                      </p>
                      <!-- <p class="pricing-price text-dark text-strong margin-bottom-10 text-center">$ <span id="price" class="timer" data-from="0" data-to="0" data-speed="2000" data-decimals="2"></span> MXN</p> -->
                      <ul id="features">
                      </ul>
                        <button id="btn1" name="btn1" class="button rounded-btn background-aqua text-white text-size-12 center margin-top-30 text-strong">ENVIARME ESTA COTIZACIÓN</button>
                        <button id="btn2" name="btn2" class="button rounded-btn background-pink text-white text-size-12 center margin-top-30 text-strong">DESCARGAR FICHA</button>
                    </div> 
                  </div> 
                </div>  
              </div>       
          </div>
        </div>
      </div>    
    </section>
    
  </article>

</main>


<script type="text/javascript">
$(document).ready(function() {
  var cantidad2 = document.getElementById("cantidad").value;
  if (cantidad2==0 || cantidad2 =="" || cantidad2 =="0"){
    //console.log("cantidad igual a cero");
    document.getElementById("price").innerHTML = "$ 0.00";
  }
});
</script>

<script type="text/javascript">


  var useAndThickness = {};
  useAndThickness['cubierta'] = ['30 mm', '40 mm', '50 mm','60 mm','80 mm','100 mm','120 mm'];
  useAndThickness['fachada'] = ['35 mm', '40 mm', '50 mm','60 mm','80 mm'];
  useAndThickness['refrigeracion'] = ['50 mm','60 mm','80 mm','100 mm','120 mm','150 mm'];
  var features = {};
  features['cubierta'] = ['• Espesor del panel: 30, 40, 50, 60, 80, 100, 120 mm.', '• Ancho útil: 1,000 mm.', '• Longitud: Hasta 16,000 mm', '• Máximo recomendado 13,000 mm.','• Ámbito de aplicación: Cubiertas','• Nervado exterior: Dos grecas / Tres grecas','• Nevado interior: Standard / Liso','• Núcleo: Poliuretano (PUR) / Poliisocianurato (PIR)','• Densidad del núcleo: EN1602 40 Kg/m3 (+/- 10%)','• Resistencia a tracción: EN1607 > 0.060Mpa','• Resistencia a compresión: EN826 > 0,100 Mpa','• Resistencia a la flexión: > 0,100 Mpa','• Reacción al fuego: F/Bs2d0/Bs1d0','• Permeabilidad al agua: Clase A'];
  features['fachada'] = ['• Espesor del panel: 35, 40, 50, 60, 80 mm.', '• Ancho útil: 1,000 mm.', '• Longitud: Hasta 16,000 mm', '• Máximo recomendado 9,000 mm.','• Ámbito de aplicación: Fachadas','• Nervado exterior: Standard / Semiliso / Liso','• Nevado interior: Standard / Liso','• Núcleo: Poliuretano (PUR) / Poliisocianurato (PIR)','• Densidad del núcleo: EN1602 40 Kg/m3 (+/- 10%)','• Resistencia a tracción: EN1607 > 0.060Mpa','• Resistencia a compresión: EN826 > 0,100 Mpa','• Resistencia a la flexión: > 0,100 Mpa','• Reacción al fuego: F/Bs2d0/Bs1d0','• Permeabilidad al agua: Clase A'];
  features['refrigeracion'] = ['• Espesor del panel: 50, 60, 80, 100, 120, 150 mm.', '• Ancho útil: 1,000 mm.', '• Longitud: Hasta 16,000 mm', '• Máximo recomendado 9,000 mm.','• Ámbito de aplicación: Cámaras Frigoríficas','• Nervado exterior: Standard / Semiliso / Liso','• Nevado interior: Standard / Liso','• Núcleo: Poliuretano (PUR) / Poliisocianurato (PIR)','• Densidad del núcleo: EN1602 40 Kg/m3 (+/- 10%)','• Resistencia a tracción: EN1607 > 0.060Mpa','• Resistencia a compresión: EN826 > 0,100 Mpa','• Resistencia a la flexión: > 0,100 Mpa','• Reacción al fuego: F/Bs2d0/Bs1d0','• Permeabilidad al agua: Clase A'];
  function ChangeUseList() {
    $('#features').html('');
    var useList = document.getElementById("use");
    var selUse = useList.options[useList.selectedIndex].value;
    var thicknessList = document.getElementById("thickness");
    var useList2 = document.getElementById("use");
    var featuresList = document.getElementById("features");
    var selUse2 = useList2.options[useList2.selectedIndex].value;
    var uses = useAndThickness[selUse];
    var uses2 = features[selUse2];
    // resetea la longitud de la lista de espesores
    while (thicknessList.options.length) {
      thicknessList.remove(0);
    }
    if (uses) {
      var i;
      for (i = 0; i < uses.length; i++) {
        var use = new Option(uses[i], i);
        thicknessList.options.add(use);
      }
    }
    // modifica el listado de las características de los paneles
    if (uses2) {
      var j;
      for (j = 0; j < uses2.length; j++) {
        var use2 = new Option(uses2[j], j);
        $('#features').append(use2);
      }
    }
  } 

</script>

<script type="text/javascript">
function myFunction() {
  var uso = document.getElementById("use").value;  
  var a3 = document.getElementById("thickness");
  var espesor = a3.options[a3.selectedIndex].text;
  var cantidad = document.getElementById("cantidad").value;

  if (cantidad==0 || cantidad =="" || cantidad=="0" || uso=="Uso"){
    // console.log("cantidad igual a cero");
    document.getElementById("price").innerHTML = "$ 0.00";
  } else {
    $.ajax({
      type:"POST",
      data: {uso:uso, espesor:espesor, cantidad:cantidad},
      url: "{{ url('/precio') }}",
      headers: { 
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
      },
      success:function(r){
        var formatter = new Intl.NumberFormat('en-US', {
          style: 'currency',
          currency: 'USD',
        });
        var price = formatter.format(r);
        console.log(price);
        document.getElementById("price").innerHTML = price;
      }
    }); 
  }
}

</script>




	
@endsection
