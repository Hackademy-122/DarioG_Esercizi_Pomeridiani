<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    


    public function __construct($_email, $_name)
    {
        $this->email=$_email;
        $this->name=$_name;

    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address ('miosito@noreply.com', 'Dario G.'),
            subject: 'Grazie per averci scritto',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.ContactMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
