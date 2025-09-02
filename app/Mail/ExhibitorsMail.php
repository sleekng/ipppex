<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExhibitorsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $regData;

    /**
     * Create a new message instance.
     */
    public function __construct($regData)
    {
        $this->regData = $regData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'IPPPEX Exhibitor Registration Confirmation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.exhibitorNotification',
            with: [
                'company_name' => $this->regData['company_name'],
                'email' => $this->regData['email'],
                'tagnumber' => $this->regData['tagnumber'],
            ],
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

