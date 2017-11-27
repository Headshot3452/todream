<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $data = [];

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
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
        return  $this->from($this->data['email'])->view('email.contact')->with([
            'data' => $this->data,
        ]);
    }
}
