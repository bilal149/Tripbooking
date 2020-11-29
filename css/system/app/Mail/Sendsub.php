<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendsub extends Mailable
{
    use Queueable, SerializesModels;
    public $sub;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sub)
    {
        $this->sub = $sub; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@pcocarrent.co.uk') ->subject('New
         Customer Equiry')->view('Subscribers')->with('sub', $this->sub);
    }
}
