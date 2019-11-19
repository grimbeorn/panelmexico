<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact2;
use App\Http\Controllers\Input;
use Mail;

class contact2Controller extends Controller
{
    public function send(Request $request)
    {
        $messages=[
            'email.required'=>'Es necesario ingresar un correo',
            'message.required'=>'Es necesario ingresar un mensaje'
        ];
        $rules=[
            'email'=>'required',
            'message'=>'required'
        ];

        $this->validate($request, $rules, $messages);

        $n = $request->input('name');
    	$c = $request->input('email');
    	$m = $request->input('message');

    	Mail::to('hernandomtz@gmail.com')->send(new NewContact2($n, $c, $m));
        // Mail::to('diego@barrafrancamexico.com')->send(new NewContact2($n, $c, $t, $m));


    	$notification = 'gracias por su mensaje, nos contactaremos con usted en menos de 24 horas!';
    	return back()->with(compact('notification'));

    }
}
