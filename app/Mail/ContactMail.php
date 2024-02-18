<?php

namespace App\Mail;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public array $contact;
    /**
     * Create a new message instance.
     */
    public function __construct(array $content)
    {
        $this->contact=$content;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->contact['email'],$this->contact['fname'],$this->contact['lname']),
        );
    }


///   subject: $this->contact['subject'],



    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown:'admin.showMessage',
            with:['contact=>$this->contact']
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
