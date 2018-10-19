<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailMessenger extends Mailable
{
    use Queueable, SerializesModels;

    public $email_message;

    public function __construct($subject, $message, $sender = null)
    {
        $this->subject($subject);
        if($sender) $this->from($sender->email, $sender->name);
        $this->email_message = $message;
    }

    public function build()
    {
        return $this->view('emails.messenger');
    }
}
