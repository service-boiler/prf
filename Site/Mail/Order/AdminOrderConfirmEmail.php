<?php

namespace ServiceBoiler\Prf\Site\Mail\Order;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use ServiceBoiler\Prf\Site\Models\Order;

class AdminOrderConfirmEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    /**
     * @var Order
     */
    public $order;

    /**
     * Create a new message instance.
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(trans('site::order.email.confirm.title'))
            ->view('site::email.order.admin.confirm');
    }
}
