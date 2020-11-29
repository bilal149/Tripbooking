<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendm extends Mailable
{
    use Queueable, SerializesModels;
    public $book;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($book)
    {
        $this->book = $book; 
    } 

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@pcocarrent.co.uk') ->subject('New
         Customer Equiry')->view('booktripsent')->with('book', $this->book);
    }
}    
