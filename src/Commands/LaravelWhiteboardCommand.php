<?php

namespace Ijpatricio\LaravelWhiteboard\Commands;

use Illuminate\Console\Command;

class LaravelWhiteboardCommand extends Command
{
    public $signature = 'laravel-whiteboard';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
