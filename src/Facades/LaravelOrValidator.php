<?php

namespace ThomasOmweri\LaravelOrValidator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ThomasOmweri\LaravelOrValidator\LaravelOrValidator
 */
class LaravelOrValidator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ThomasOmweri\LaravelOrValidator\LaravelOrValidator::class;
    }
}
