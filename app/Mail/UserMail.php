<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Mail;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        $this->data = $data;
    }
    public function sendContactUs(Request $request){
        $data= $request->validation([
            'name'=>'required|string|max:50',
            'email'=>'required|string',
           'subject'=>'required',
           'message'=>'required',

        ]);
        Mail::to('info@.com')->send(
            new ContactMAIL($data)
        );
        return "mail sent!";
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address($this->data['email'], $this->data['name']),
            subject: $this->data['subject'] . '- Contact Us',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.welcome',
            with:[
          $this->data,
            ]
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
