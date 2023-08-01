<?php

namespace Kitakode\LaravelFlip;

use Illuminate\Support\Facades\Http;

class Authenticate extends BaseAuthenticate implements Interfaces\CurloptInterface, Interfaces\SecretKeyInterface
{
    use Traits\CurloptTrait, Traits\SecretKeyTrait;

    /**
     * Constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * {@inheritdoc}
     */
    public function byUserpwd()
    {
        return $this->isUserpwd() ? Http::withOptions([]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function byHttpheader()
    {
        return $this->isHttpheader() ? Http::withOptions([]) : null;
    }
}
