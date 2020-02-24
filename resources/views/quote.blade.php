@extends('layouts.app')

@section('content')
<main role="main">
  <article>    
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(img/bigStockFoto/1a.jpg)">
      <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
        PRESUPUESTOS
      </h1>
      <p class="animated-element text-white">Nuestros Precios</p>
      <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
    </header>
    <!-- Section 1 -->
    <section class="section-small-padding background-white text-center">      
      <div class="line">
        <h2 class="text-dark text-size-50 text-m-size-40">¿ Cuánto <b>Cuesta ?</b></h2>
      </div>                                                                                                    
    </section>
    <section class="section background-white" style="padding: 15px;">
      <div class="line">
        <div class="margin2x">
          <div class="m-12 l-6">          
            <form name="quoteForm" class="customform needs-validation" action="{{ url('/quote') }}" method="post" enctype="multipart/form-data" novalidate>
              {{ csrf_field() }}            
              <div class="line">  


                <div class="s-12">
                  <select id="use" name="use" onchange="ChangeUseList(); myFunction()" class="form-control required">
                    <option value="uso" selected data-default>Uso</option>
                    <option value="cubierta">cubierta</option>
                    <option value="fachada">fachada</option>
                    <!-- <option value="refrigeracion">refrigeración</option> -->
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
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-12">
                      <input id="name" name="name" value="{{ old('name') }}" class="required name" placeholder="nombre" title="Your name" type="text" required/>
                    </div>
                    <div class="s-12 m-12 l-12">
                      <input id="email" name="email" value="{{ old('email') }}" class="required email" placeholder="correo" title="Your e-mail" type="text" required/>
                    </div>
                  </div>
                </div>
                <!-- <div class="s-12">
                  <a class="captcha-button text-white background-primary border-radius margin-bottom">
                    <span class="not-a-robot-icon"><i class="icon-check text-white"></i></span> 
                    <span class="not-a-robot-text">no soy un robot</span>
                  </a>
                </div> -->
                <div class="s-12">
                    <button class="button background-green border-radius s-12">enviar</button>
                    * cotización sujeta a tipo de cambio<br>
                    * los precios pueden variar sin previo aviso<br>
                    * no incluye flete a obra<br>
                    * para cotizaciones a partir de planos, por favor contáctenos<br>

                </div>
                <div class="s-12 button-parent"></div> 
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
          <div class="m-12 l-6">
            <div class="line">
              <div class="l-12 xl-9 center">
                <div class="s-12 m-12 l-12"> 
                  <div class="animated-element pricing-recommended pricing-table margin-bottom-30">
                    <p id="p01" name="p01" class="pricing-price text-dark text-strong margin-bottom-10 text-center"> 
                      <span id="price" name="price">0.00</span> MXN *
                    </p>
                    <ul id="features">
                    </ul>
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
    document.getElementById("price").innerHTML = "$ 0.00";
  }
});
</script>

<script type="text/javascript">
  var useAndThickness = {};
  useAndThickness['cubierta'] = ['30 mm', '40 mm', '50 mm'];
  useAndThickness['fachada'] = ['35 mm', '40 mm', '50 mm'];
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
  var cantidad = document.getElementById("cantidad").value;
  // error en la siguiente línea
  var espesor = a3.options[a3.selectedIndex].text;
  //

  if (cantidad == 0 || cantidad == "" || cantidad == "0" || uso == "Uso"){
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
        document.getElementById("price").innerHTML = price;
      }
    }); 
  }

  // if (document.getElementById("use").value == "Uso") {
  //   console.log("uso");
  // }




}
</script>

@endsection
