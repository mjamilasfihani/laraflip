<?php

declare(strict_types=1);

use Illuminate\Http\Client\PendingRequest;
use Kitakode\LaravelFlip\Authenticate;
use function PHPUnit\Framework\assertSame;

it('connector should return pending requests class', function () {
    assertSame(PendingRequest::class, get_class((new Authenticate())->toFlip()));
});
