<?php

namespace Emamalias\FilamentPageBuilder\Commands;

use Illuminate\Console\Command;

class FilamentPageBuilderCommand extends Command
{
    public $signature = 'filament-page-builder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
