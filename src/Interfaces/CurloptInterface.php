<?php

namespace Kitakode\LaravelFlip\Interfaces;

interface CurloptInterface
{
    /**
     * Get the CURLOPT's configuration.
     *
     * @return int
     */
    public function getCurlopt();

    /**
     * What is the curlopt type's?
     *
     * @param  int  $curlopt
     * @return bool
     */
    public function curloptIs($curlopt);

    /**
     * Indicate that the config's USERPWD.
     *
     * @return bool
     */
    public function isUserpwd();

    /**
     * Indicate that the config's HTTPHEADER.
     *
     * @return bool
     */
    public function isHttpheader();
}
