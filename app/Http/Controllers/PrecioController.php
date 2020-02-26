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

      //
      $cipCost = $result1->cipCost;
      $m2PerContainer = $result1->m2PerContainer;

      $indirectCost = 40;
      $profit = 0.35;
      $importCost = 9500;
      $iva = 0.16;

      $numContenedores = ceil($q/$m2PerContainer);
      $costoImportPorM2 = ($importCost*$numContenedores)/$q;
      $precioBaseUnitario = ($cipCost + $costoImportPorM2 + $indirectCost)*(1+$profit);    
      $ivaUnitario = $precioBaseUnitario*$iva;
      $precioFinalUnitario = $precioBaseUnitario + $ivaUnitario;

      $pBUxCantidad = $precioBaseUnitario*$q;
      $ivaxCantidad = $q*$pBUxCantidad;

      $precioTotal = $precioFinalUnitario*$q;

      echo($precioTotal);

    }

}
