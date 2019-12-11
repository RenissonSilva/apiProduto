<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class email extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $corpo;
    public $assunto;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $corpo, $assunto)
    {
        $this->nome =  $nome;
        $this->corpo = $corpo;
        $this->assunto = $assunto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.sendemail')->subject($this->assunto)->from('reni@lindao.com');
    }
}
