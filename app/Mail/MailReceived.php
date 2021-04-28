<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailReceived extends Mailable
{
    use Queueable, SerializesModels;

    // el asunto del email que recibirá el usuario una vez que haya sido exitoso el envío
    public $subject = 'Mail Received';

    // se define la variable mailMessage que almacenará el mensaje recibido y debe ser público para usar en la vista
    public $mailMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        // le asignamos $message a $mailMessage cuando sea la clase MailReceived sea instaciada
        $this->mailMessage = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email-received');
    }
}
