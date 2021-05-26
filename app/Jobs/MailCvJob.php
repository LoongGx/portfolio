<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\MailCV;
use Mail;
use PDF;


class MailCvJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // cv pdf view
        $image = public_path('img/profile/avatar7.png');
        $imageData = base64_encode(file_get_contents($image));
        $profile = 'data:'.mime_content_type($image).';base64,'.$imageData;
        $context = ['profile' => $profile];
        $pdf = PDF::loadView('portfolio.pdf.cv', $context);

        Mail::to($this->email)->send(new MailCV($pdf));
    }
}
