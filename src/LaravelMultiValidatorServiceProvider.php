<?php

namespace LaravelMultiValidator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMultiValidatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-multi-validator');
    }
}
