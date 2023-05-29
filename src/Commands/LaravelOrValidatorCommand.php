<?php

namespace ThomasOmweri\LaravelOrValidator\Commands;

use Illuminate\Console\Command;

class LaravelOrValidatorCommand extends Command
{
    public $signature = 'laravel-or-validator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
