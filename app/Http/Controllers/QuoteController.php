<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\FileDownloaded;
use App\Http\Controllers\Input;
use Mail;
use DB;
use DateTime;
use PDF;


use Illuminate\Support\Facades\Storage;



class quoteController extends Controller
{
  function index(Request $request)
  {
    $messages=[
      'email.required'=>'Es necesario ingresar un correo',
      'name.required'=>'Es necesario ingresar un nombre'
    ];
    $rules=[
      'email'=>'required',
      'name'=>'required'
    ];

    $this->validate($request, $rules, $messages);

    $n = $request->input('name');
    $c = $request->input('email');
    $u = $request->input('use');
    $q = $request->input('cantidad');
    $e2 = $request->input('thickness');

    if ($u == "cubierta") {
      if($e2 == 0){
        $e = "30 mm";
      } elseif ($e2 == 1){
        $e = "40 mm";
      } elseif ($e2 == 2){
        $e = "50 mm";
      } elseif ($e2 == 3){
        $e = "60 mm";
      } elseif ($e2 == 4){
        $e = "80 mm";
      } elseif ($e2 == 5){
        $e = "100 mm";
      } elseif ($e2 == 6){
        $e = "120 mm";
      } else {}
    } elseif ($u == "fachada") {
      if($e2 == 0){
        $e = "35 mm";
      } elseif ($e2 == 1){
        $e = "40 mm";
      } elseif ($e2 == 2){
        $e = "50 mm";
      } elseif ($e2 == 3){
        $e = "60 mm";
      } elseif ($e2 == 4){
        $e = "80 mm";
      } else {}
    } elseif ($u == "refrigeracion") {
      if($e2 == 0){
        $e = "50 mm";
      } elseif ($e2 == 1){
        $e = "60 mm";
      } elseif ($e2 == 2){
        $e = "80 mm";
      } elseif ($e2 == 3){
       $e = "100 mm";
      } elseif ($e2 == 4){
        $e = "120 mm";
      } elseif ($e2 == 5){
        $e = "150 mm";
      } else {}
    } else {}   

    $query1 = DB::table('products')->where('use',$u)->where('thickness',$e)->get();

    foreach ($query1 as $query) {}

    $costoExWorks = $query->exWorksCost;
    $costoFlete = $query->freightCost;
    $costoImport = $query->importationCost;
    $long_description = $query->long_description;
    $indirecto = 1;
    $profit = $query->profit;
    $m2PerContainer = $query->m2PerContainer;
    $numContenedores = ceil($q/$m2PerContainer);
    $costoMaterial = $q*$costoExWorks;
    $utilidad=$costoMaterial*$profit;
    $costoFlete=2500*$numContenedores;
    $costoImport=2750*$numContenedores;
    $costoIndirect=$q*1;
    $precioUnit=(($costoMaterial+$utilidad+$costoFlete+$costoImport+$costoIndirect)/$q)*20;
    $precioTotal=$precioUnit*$q;
    $iva = $precioTotal*0.16;
    $total = $precioTotal+$iva;
    $fecha1 = new DateTime();
    $fecha = $fecha1->format('Y-m-d H:i:s');

    $product_data = array("name"=>$n, "email"=>$c, "use"=>$u, "cantidad"=>$q, "long_description"=>$long_description, "precioUnit"=>$precioUnit, "iva"=>$iva, "precioTotal"=>$precioTotal, "total"=>$total, "fecha"=>$fecha);

    $output = '  
      <html>
        <head>
          <meta charset="utf-8">
          <title>Presupuesto</title>
        </head>
        <body>
          <div max-width: 900px; margin:auto; padding:5px; font-size:14px; line-height:24px; font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; color:black;>
            <table cellpadding="0" cellspacing="0">
              <tr class="top">
                <td colspan="2">
                  <table padding-bottom: 20px;>
                    <tr>
                      <td class="title" style="font-size: 45px; line-height: 45px; color: #333;">
                        <img src="img/logoAbeja_001.svg" style="width:100%; max-width:100px;">
                      </td>              
                    </tr>
                  </table>
                </td>
              </tr>
              <tr class="information" style="font-size: 15px; line-height: 15px; color: #333;">
                  <td colspan="5">
                      <table>
                          <tr>
                            <td>
                              '.$product_data["name"].'<br>
                              '.$product_data["email"].'
                            </td>
                            <td>
                              Barrafranca S.A. de C.V.<br>
                              Colina de Buenaventura 47<br>
                              Boulevares, Naucalpan, C.P. 53110<br>
                              contacto@panelmexico.com<br>
                              55 8421 4610
                            </td>
                          </tr>
                      </table>
                  </td>
              </tr>
              <tr class="information">
                <td colspan="5">
                  <h1>Presupuesto #PM '.$product_data["fecha"].' </h1><br>
                  <strong>Fecha de Presupuesto:</strong> '.$product_data["fecha"].'<br>
                  <strong>Comercial:</strong> Hernando Martínez S.<br><br>
                </td>
              </tr>
              <tr class="heading">
                  <td align="left">
                    Descripción
                  </td>
                  <td align="right">
                    Cantidad
                  </td>
                  <td align="right">
                    P. U.
                  </td>
                  <td align="right">
                    Impuestos
                  </td>
                  <td align="right">
                    Subtotal
                  </td>
              </tr>
              <tr class="item">
                  <td>
                      '.$product_data["long_description"].'
                  </td>
                  <td align="right">
                      '.$product_data["cantidad"].'
                  </td>
                  <td align="right">
                      '.$product_data["precioUnit"].'
                  </td>
                  <td align="right">
                      IVA
                  </td>
                  <td align="right">
                      '.$product_data["precioTotal"].'
                  </td>
              </tr>
              <tr class="item last">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr class="item last">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr class="item last">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr class="item last">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td align="right"><b>Subtotal</b></td>
                  <td align="right">'.$product_data["precioTotal"].'</td>
              </tr>
              <tr class="item last">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td align="right">IVA</td>
                  <td align="right">'.$product_data["iva"].'</td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td align="right"><b>Total</b></td>
                  <td align="right">'.$product_data["precioTotal"].'</td>
              </tr>
            </table>
            <br><br><br><br>
            - cotización en pesos mexicanos [MXN]<br>
            - los precios pueden variar sin previo aviso<br>
            - costo de flete nacional no incluido
          </div>
        </body>
      </html>';

      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($output);
      // return $pdf->stream();

      // 18 nov 2019
      // $path = $pdf->store('quotes');
      // dd($path);

      $a = 'quote'.time().'.'.'pdf';

      Storage::put($a, $pdf->stream());

      Mail::to('hernandomtz@gmail.com')->send(new FileDownloaded($a));

      $notification = "el correo ha sido enviado";
      return back()->with(compact('notification'));
    

  }




}

 

