<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Security;

class SendTestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $score = Security::latest()->first()->score;
        
        
        return $this->view('emails.test',compact('score'))
                ->from('photokotasato020@gmail.com','株式会社メディアブレイン')
                ->subject("セキュリティチェックリストの結果");
    }
}
