<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use DB;

class PrecioController extends Controller
{

    public function send(Request $request)
    {
      $datos=array($_POST['uso'], $_POST['espesor'], $_POST['cantidad']);
      $uso=$datos[0];
      $espesor=$datos[1];
      $q=$datos[2];

      // funciona
      $result = DB::table('products')->where('use',$uso)->where('thickness',$espesor)->get();
      
      foreach ($result as $result1) {
      }

      $cipCost = $result1->cipCost;
      $profit = $result1->profit;
      $m2PerContainer = $result1->m2PerContainer;

      $importCost = 9500;
      $indirectCost = 0.35;
      $numContenedores = ceil($q/$m2PerContainer);
      $costoImportPorM2 = ($numContenedores*$importCost)/$q;
      $precioBaseUnitario = $cipCost+$costoImportPorM2;
      $precioFinalUnitario = ($precioBaseUnitario*(1+$profit));
      $ivaUnitario = $precioFinal*0.16;

      $precioFinal = $precioFinalUnitario*$q;
      $ivaFinal = $precioFinal*0.16;
      $precioTotal = $precioFinal+$ivaFinal;

      echo($precioTotal);


      // $use = $query->use;
      // $name = $query->name;
      // $description = $query->description;
      // $long_description = $query->long_description;
      // $thickness = $query->thickness;
      // $m2PerContainer = $query->m2PerContainer;
      // $cipCost = $query->cipCost;
      // $indirectCost = $query->indirectCost;
      // $profit = $query->profit;

      // $importCost = 9500;

      // $numContenedores = ceil($q/$m2PerContainer);
      // $costoImportPorM2 = ($numContenedores*$importCost)/$q;
      // $precioBaseUnitario = $cipCost+$costoImportPorM2;
      // $precioFinalUnitario = ($precioBaseUnitario*(1+$profit));
      // $ivaUnitario = $precioFinal*0.16;

      // $precioFinal = $precioFinalUnitario*$q;
      // $ivaFinal = $precioFinal*0.16;
      // $precioTotal = $precioFinal+$ivaFinal;



      // OK $cantidad = $request->input('cantidad');

      // esta notification es la buena:////////////////////////////////////////
      // $notification = '<span id="price" class="timer" data-from="0" data-to="'.$cantidad.'" data-speed="2000" data-decimals="2"> 0.00</span>';
      // OK $notification = $cantidad;

      // if($request->ajax())
      // {
      //     $data = $request->get()
      // }
      // $q = $request->get('cantidad');
      // $qty = $request->input('cantidad');
      // $r = "esta es la cantidad: ".$cantidad;    

      // $notification = '<p id="p01" class="pricing-price text-dark text-strong margin-bottom-10 text-center">$ <span id="price" class="timer" data-from="0" data-to="'.$cantidad.'" data-speed="2000" data-decimals="2"></span> MXN</p>'
      // $notification = $cantidad;
      // return back()->with(compact('notification'));
      // echo $print = "<span id='price' class='timer' data-from='0' data-to='".$cantidad."' data-speed='2000' data-decimals='2'></span>";
      // OK cho $notification;
      // echo $uso;
      // echo $espesor;
      // echo $cantidad;
    }

}
