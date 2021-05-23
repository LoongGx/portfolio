<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailCv extends Mailable
{
    use Queueable, SerializesModels;
    protected $pdf;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("kuokloong220294@gmail.com")
                    ->markdown('emails.mail_cv')
                    ->attachData($this->pdf->output(), 'chen_kuok_loong_cv.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
