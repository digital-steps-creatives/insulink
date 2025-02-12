<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorporateOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $emailContent;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $emailContent)
    {
       $this->emailContent = $emailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.corporate')
         ->subject('Welcome to Insulink Kenya Ltd')
            ->with('content', $this->emailContent);
    }
}
