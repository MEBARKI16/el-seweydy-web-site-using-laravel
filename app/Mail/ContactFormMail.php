<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /* return $this->view('email.sendMail')
                    ->subject('Example Subject')
                    ->to('nesreddineboudene@gmail.com'); */
        //return $this->view('view.name');
        
        return $this->view('email.sendMail');
            /*->subject('This is notification')
            ->attach($this->data[0]); */
            
    }
}
