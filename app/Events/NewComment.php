<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewComment
{
    use Dispatchable, SerializesModels;

    public $commment;

    /**
     * Create a new event instance.
     */
    public function __construct($commment)
    {
        $this->commment = $commment;
    }
}
