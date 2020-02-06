<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Feedback;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(  $request)
    {
       $this->email=$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('subject of email')
        ->from('vijaymaharjan911@gmail.com')
        ->to('vastest619@gmail.com')
       -> view('pages.email');
    }
    // $this->email->email, $this ->email->fname
}
