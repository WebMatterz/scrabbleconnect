<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name,$phone_no, $message, $type)
    {
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
        $this->phone_no = $phone_no;
        $this->message = $message;
       
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@scrabbleconnect.com','ScrabbleConnect')->subject('Contact Us')->markdown('contactusmail')->with(['email'=>$this->email,'name' => $this->name, 'type' => $this->type, 'phone_no' => $this->phone_no, 'message' => $this->message]);
    }
}
