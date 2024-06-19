<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $content)
    {
        $this->content = $content;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Subject',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'wardhana15.aw@gmail.com',
            with: ['content' => $this->content]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
// =======================================

// <?php
// namespace App\Mail;

// use App\Models\Order;
// use Illuminate\Bus\Queueable;
// use Illuminate\Mail\Mailable;
// use Illuminate\Mail\Mailables\Content;
// use Illuminate\Queue\SerializesModels;

// class SampleMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public array $content;

//     public function __construct(array $content) {
//         $this->content = $content;
//     }

//     public function build(): Content
//     {
//         return $this->subject($this->content['subject'])
//             ->view('emails.sample');
//     }
// }