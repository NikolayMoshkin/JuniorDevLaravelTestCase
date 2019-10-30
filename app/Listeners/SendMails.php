<?php

namespace App\Listeners;

use App\Events\ProposalSent;
use App\Mail\AdminFormSend;
use App\Mail\ClientFormSend;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMails
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ProposalSent $event)
    {
        Mail::to($event->client_attributes['email'])->queue(
            new ClientFormSend($event->client_attributes['name'])
        );
        Mail::to($event->admins)->queue(
            new AdminFormSend($event->client_attributes)
        );
    }
}
