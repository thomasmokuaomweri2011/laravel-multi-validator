<?php

namespace LaravelMultiValidator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelMultiValidator\LaravelMultiValidator
 */
class LaravelMultiValidator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelMultiValidator\LaravelMultiValidator::class;
    }
}
