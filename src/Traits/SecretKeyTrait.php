<?php

namespace Kitakode\LaravelFlip\Traits;

trait SecretKeyTrait
{
    /**
     * {@inheritdoc}
     */
    public function getSecretKey()
    {
        return (string) config('kitakode-laraflip.secret_key');
    }
}
