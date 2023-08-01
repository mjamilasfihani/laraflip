<?php

namespace Kitakode\LaravelFlip;

use Illuminate\Http\Client\PendingRequest;

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
     * @return null|\Illuminate\Http\Client\PendingRequest
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
            /** @var null|\Illuminate\Http\Client\PendingRequest $connector */
            $connector = $this->$method();

            if ($connector instanceof PendingRequest) {
                return $connector;
            }
        }

        // oops!
        abort(500);
    }
}
