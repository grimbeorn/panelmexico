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
    } else {}   

    $query1 = DB::table('products')->where('use',$u)->where('thickness',$e)->get();

    foreach ($query1 as $query) {}

      $cipCost = $query->cipCost;
      $m2PerContainer = $query->m2PerContainer;
      $long_description = $query->long_description;

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
      $ivaxCantidad = $iva*$pBUxCantidad;

      $precioTotal = $precioFinalUnitario*$q/1000;

      $fecha1 = new DateTime();
      $fecha = $fecha1->format('Y-m-d H:i:s');

      $product_data = array("name"=>$n, "email"=>$c, "use"=>$u, "cantidad"=>$q, "long_description"=>$long_description, "precioBaseUnitario"=>$precioBaseUnitario, "ivaxCantidad"=>$ivaxCantidad, "pBUxCantidad"=>$pBUxCantidad, "precioTotal"=>$precioTotal, "fecha"=>$fecha);

    $output = '  
      <html>
      <head>
          <meta charset="utf-8">
          <title>Presupuesto 04</title>
      </head>

      <body>

          <table cellpadding="0" cellspacing="0" style="">
            <!-- 1o renglón: LOGO -->
            <tr>
              <td colspan="5" style="">
                <img src="img/logoAbeja_001.svg" style="width:100%; max-width:100px;">
              </td>              
            </tr>
            <!-- 2o renglón: INFORMACIÓN DESTINATARIO Y REMITENTE -->
            <tr >
                <td colspan="5" style=""><br><br>
                        <tr>
                          <td style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px;" colspan="4" valign="top" align="left" >
                            '.$product_data["name"].'<br>
                            '.$product_data["email"].'
                          </td>
                          <td style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px;" align="right">
                            Barrafranca S.A. de C.V.<br>
                            contacto@panelmexico.com<br>
                            55 9191 2790
                          </td>
                        </tr>

                </td>
            </tr>
            <!-- 3o renglón: NÚMERO DE PRESUPUESTO - FECHA Y COMERCIAL -->
            <tr>
              <td colspan="5" style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 24px;"><br>
                <h1>Presupuesto #PM'.$product_data["fecha"].'</h1><br>
                <strong>Fecha de Presupuesto:</strong> '.$product_data["fecha"].' <br>
                <strong>Comercial:</strong> Hernando Martínez S.<br><br>
              </td><br>
            </tr>

              <!-- 4o renglón: HEADINGS DE LA TABLA -->
              <tr>
                  <td align="left" style="background: rgb(50,150,170); color: white; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 15px; padding: 5px; line-height: 24px; column-width:100px;" height="23" >
                    Descripción
                  </td>
                  <td align="right" style="background: rgb(50,150,170); color: white; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; text-align: center; font-size: 15px; padding: 5px; line-height: 24px; column-width:100px;">
                    Cantidad
                  </td>
                  <td align="right" style="background: rgb(50,150,170); color: white; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; text-align: center; font-size: 15px; padding: 5px; line-height: 24px; column-width:100px;">
                    P. U.
                  </td>
                  <td align="right" style="background: rgb(50,150,170); color: white; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; text-align: center; font-size: 15px; padding: 5px; line-height: 24px; column-width:100px;">
                    Impuestos
                  </td>
                  <td align="right" style="background: rgb(50,150,170); color: white; font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; text-align: right; font-size: 15px; padding: 5px; line-height: 24px; column-width:100px;">
                    Subtotal
                  </td>
              </tr>
              <!-- 5o renglón: CONTENIDO DE LA TABLA -->
              <tr>
                  <td style="font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; border-bottom: 1px solid black; line-height: 35px; padding: 5px;">
                      '.$product_data["long_description"].'
                  </td>
                  <td align="right" style="font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; border-bottom: 1px solid black; line-height: 35px; padding: 5px;">
                      '.$product_data["cantidad"].'
                  </td>
                  <td align="right" style="font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; border-bottom: 1px solid black; line-height: 35px; padding: 5px;">
                      '.$product_data["precioBaseUnitario"].'
                  </td>
                  <td align="right" style="font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; border-bottom: 1px solid black; line-height: 35px; padding: 5px;">
                      IVA
                  </td>
                  <td align="right" style="font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; border-bottom: 1px solid black; line-height: 35px; padding: 5px;">
                      '.$product_data["pBUxCantidad"].'
                  </td>
              </tr>
              <tr>
                <td><br><br></td>
              </tr>
              <!-- 6o renglón: SUBTOTAL -->
              <tr>
                  <td style=""></td>
                  <td style=""></td>
                  <td style=""></td>
                  <td align="right" style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 35px;"><b>Subtotal</b></td>
                  <td align="right" style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px;">'.$product_data["pBUxCantidad"].'</td>
              </tr>
              <!-- 7o renglón: IVA -->
              <tr>
                  <td style=""></td>
                  <td style=""></td>
                  <td style=""></td>
                  <td align="right" style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 35px;">IVA</td>
                  <td align="right" style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px;">'.$product_data["ivaxCantidad"].'</td>
              </tr>
              <!-- 8o renglón: TOTAL -->
              <tr>
                  <td style=""></td>
                  <td style=""></td>
                  <td style=""></td>
                  <td align="right" style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 35px;"><b>Total</b></td>
                  <td align="right" style=" font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 14px;">'.$product_data["precioTotal"].'</td>
              </tr>
          </table>
          <br><br><br><br>
          <p style="font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; font-size: 13px; line-height: 24px;"><i>
          - cotización en pesos mexicanos [MXN]<br>
          - los precios pueden variar sin previo aviso<br>
          - costo de flete nacional NO incluido
          </i></p>
      </body>
      </html>
      ';

      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($output);
      //return $pdf->stream();

      $a = 'quote'.time().'.'.'pdf';

      Storage::put($a, $pdf->stream());

      $emails=[$c,'hernandomtz@gmail.com'];
      Mail::to($emails)->send(new FileDownloaded($a));

      $notification = "el correo ha sido enviado";
      return back()->with(compact('notification')); 

  }
}
