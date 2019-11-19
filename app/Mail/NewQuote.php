<?php

namespace App\Mail;        

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\n;
use App\c;
// use App\fecha;
// use App\q;
// use App\sprecioUnit;
// use App\sprecioTotal;
// use App\siva;
// use App\stotal;
// use App\slong_description;


class NewQuote extends Mailable
{
    use Queueable, SerializesModels;

    public $n;
    public $c;
    // public $fecha;
    // public $q;
    // public $sprecioUnit;
    // public $sprecioTotal;
    // public $siva;
    // public $stotal;
    // public $slong_description;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($n, $c, $fecha, $q, $sprecioUnit, $sprecioTotal, $siva, $stotal, $slong_description)
    public function __construct($n, $c)
    {
        $this->n = $n;
        $this->c = $c;
        // $this->fecha = $fecha;
        // $this->q = $q;
        // $this->sprecioUnit = $sprecioUnit;
        // $this->sprecioTotal = $sprecioTotal;
        // $this->siva = $siva;
        // $this->stotal = $stotal;
        // $this->slong_description = $slong_description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.quote3')->subject('Nueva Cotización');
    }
}
