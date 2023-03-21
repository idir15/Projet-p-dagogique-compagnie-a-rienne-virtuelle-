<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;

class HelloMailGun extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reference, $prefix)
    {
        $this->reference = $reference;
        $this->prefix = $prefix;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd(storage_path('pdf'));
        //dd(storage_path('pdf'));
        return $this->from('mailgun@sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org',"Fennec Airlines")
                        ->view('mail')->attach(storage_path('pdf')."/".$this->prefix."_".$this->reference.".pdf");
    }

    
}
