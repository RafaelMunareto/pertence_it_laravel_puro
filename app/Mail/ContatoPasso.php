<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoPasso extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contato@pertence-it.com.br')->cc($this->dados->email)
        ->subject("Contato Cliente " . " " . $this->dados->nome . " " . $this->dados->sobrenome)
        ->markdown('emails.passo-markdown')
        ->with([
            'url'     => route('index'),
        ]);
    }
}
