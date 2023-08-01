<?php

namespace Kitakode\LaravelFlip\Traits;

trait CurloptTrait
{
    /**
     * {@inheritdoc}
     */
    public function getCurlopt()
    {
        return (int) config('kitakode-laraflip.curlopt');
    }

    /**
     * {@inheritdoc}
     */
    public function curloptIs($curlopt)
    {
        return $this->getCurlopt() == $curlopt;
    }

    /**
     * {@inheritdoc}
     */
    public function isUserpwd()
    {
        return $this->curloptIs(CURLOPT_USERPWD);
    }

    /**
     * {@inheritdoc}
     */
    public function isHttpheader()
    {
        return $this->curloptIs(CURLOPT_HTTPHEADER);
    }
}
