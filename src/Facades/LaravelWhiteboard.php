<?php

namespace Ijpatricio\LaravelWhiteboard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ijpatricio\LaravelWhiteboard\LaravelWhiteboard
 */
class LaravelWhiteboard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ijpatricio\LaravelWhiteboard\LaravelWhiteboard::class;
    }
}
