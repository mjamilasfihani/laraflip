<?php

namespace Kitakode\LaravelFlip;

use Illuminate\Http\Client\PendingRequest;
use Kitakode\LaravelFlip\Flipable\Flipable;

abstract class BaseAuthenticate
{
    /**
     * By USERPWD
     *
     * @return null|\Illuminate\Http\Client\PendingRequest
     */
    abstract public function byUserpwd();

    /**
     * By HTTPHEADER
     *
     * @return null|\Illuminate\Http\Client\PendingRequest
     */
    abstract public function byHttpheader();

    /**
     * Connect to Flip
     *
     * @return \Kitakode\LaravelFlip\Flipable\FlipableInterface
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function toFlip()
    {
        /**
         * Define the connectors, than force to connect.
         */
        foreach ([
            'byUserpwd',
            'byHttpheader',
        ] as $method) {
            if (($connector = $this->$method()) instanceof PendingRequest) {
                return new Flipable($connector);
            }
        }

        // oops!
        abort(500);
    }
}
