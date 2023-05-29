<?php

namespace ThomasOmweri\LaravelOrValidator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ThomasOmweri\LaravelOrValidator\Commands\LaravelOrValidatorCommand;

class LaravelOrValidatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-or-validator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-or-validator_table')
            ->hasCommand(LaravelOrValidatorCommand::class);
    }
}
