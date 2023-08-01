<?php

declare(strict_types=1);

use Kitakode\LaravelFlip\Authenticate;
use Kitakode\LaravelFlip\Flipable\Flipable;
use function PHPUnit\Framework\assertTrue;

it("connector should return flipable's class", function () {
    assertTrue((Authenticate::toFlip() instanceof Flipable));
});
