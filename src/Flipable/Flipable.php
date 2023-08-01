<?php

namespace Kitakode\LaravelFlip\Flipable;

use Illuminate\Http\Client\PendingRequest;

class Flipable implements FlipableInterface
{
    /**
     * Instance of Pending request.
     *
     * @var \Illuminate\Http\Client\PendingRequest
     */
    protected $pendingRequest;

    /**
     * Constructor.
     */
    public function __construct(PendingRequest $pendingRequest)
    {
        $this->pendingRequest = $pendingRequest;
    }
}
