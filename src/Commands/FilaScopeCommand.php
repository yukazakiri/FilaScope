<?php

namespace Yukazakiri\FilaScope\Commands;

use Illuminate\Console\Command;

class FilaScopeCommand extends Command
{
    public $signature = 'filascope';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
