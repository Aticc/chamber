<?php

namespace App\Mail;

use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MembershipReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $member;

    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Membership Application Received - ATICC',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.membership.received',
        );
    }
}