<?php

declare(strict_types=1);

namespace TomasVotruba\Website\Posts\Year2017\Ast;

use stdClass;

final class SomeClass
{
    public function someMethod(stdClass $value): void
    {
        $value->call();
    }
}
