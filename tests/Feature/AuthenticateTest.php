<?php

declare(strict_types=1);

use Kitakode\LaravelFlip\Authenticate;
use Kitakode\LaravelFlip\Flipable\Flipable;
use function PHPUnit\Framework\assertSame;

it('connector should return pending requests class', function () {
    assertSame(Flipable::class, get_class((new Authenticate())->toFlip()));
});
