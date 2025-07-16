<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Userupdated extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    //public $client;

    public function __construct($user)
    {
        $this->user = $user;
       // $this->client = $client;
    }

    public function build()
    {
        return $this->view('emails.user_updated')->with(['user' => $this->user]);
    }
}
