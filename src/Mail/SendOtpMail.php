<?php
namespace nextdev\nextdashboard\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendOtpMail extends Mailable
{
     use Queueable, SerializesModels;

    public $otp;
    public $admin;

    public function __construct($otp, $admin)
    {
        $this->otp = $otp;
        $this->admin = $admin;
    }

    public function build()
    {
        return $this->subject('OTP to Recover Your Password')
            ->markdown('nextdashboard::emails.otp');
    }
}
