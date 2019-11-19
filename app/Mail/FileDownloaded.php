<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\a;

class FileDownloaded extends Mailable
{
    use Queueable, SerializesModels;

    public $a;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($a)
    {
        $this->a = $a;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nuevo Contacto')->from('contacto@panelmexico.com')
        ->view('emails.files_downloaded')
        ->attach(storage_path('app/'.$this->a));
    }   
}

