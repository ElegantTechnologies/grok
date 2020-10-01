<?php

namespace ElegantTechnologies\Grok\Commands;

use Illuminate\Console\Command;

class GrokCommand extends Command
{
    public $signature = 'hw';

    public $description = 'Default description for ElegantTechnologies/Grok command';

    public function handle()
    {
        $this->comment('ElegantTechnologies/Grok/hw/tbd');
    }
}
