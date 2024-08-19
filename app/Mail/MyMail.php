<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $firstName;

    public function __construct($msg, $firstName)
    {
        $this->msg = $msg;
        $this->firstName = $firstName;
    }

    public function build()
    {
        return $this->from('thelanguageacademy.enquiries@gmail.com', 'The Language Academy')
                    ->subject('Response to Your Query')
                    ->view('emails.query_response')
                    ->with([
                        'msg' => $this->msg,
                        'firstName' => $this->firstName,
                    ]);
    }
}
