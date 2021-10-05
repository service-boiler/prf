<?php

namespace ServiceBoiler\Prf\Site\Events;

use Illuminate\Queue\SerializesModels;
use ServiceBoiler\Prf\Site\Models\Repair;

class RepairCreateEvent
{
    use SerializesModels;

    /**
     *
     *
     * @var \Illuminate\Contracts\Auth\Authenticatable
     */
    public $repair;

    /**
     * Create a new event instance.
     *
     * @param  Repair $repair
     */
    public function __construct($repair)
    {
        $this->repair = $repair;
    }
}
