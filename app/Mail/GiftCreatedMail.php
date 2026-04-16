<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class GiftCreatedMail extends Mailable
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function build()
    {
        return $this->subject('Nouveau cadeau ajouté')
                    ->view('emails.gift_created');
    }
}