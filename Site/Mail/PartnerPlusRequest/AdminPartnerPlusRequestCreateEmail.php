<?php

namespace ServiceBoiler\Prf\Site\Mail\PartnerPlusRequest;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use ServiceBoiler\Prf\Site\Models\PartnerPlusRequest;

class AdminPartnerPlusRequestCreateEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    
    
    public $partnerPlusRequest;

    public function __construct(PartnerPlusRequest $partnerPlusRequest)
    {
        
        $this->partnerPlusRequest = $partnerPlusRequest;
    }

    public function build()
    {
        return $this
            ->subject(trans('site::user.partner_plus_request.email_create_title') .' ' .$this->partnerPlusRequest->partner->name)
            ->view('site::partner_plus_request.email_create');
    }
}
