<?php


namespace ElegantTechnologies\Grok\Tests\Feature\Commands;

class GrokCommandTest extends \ElegantTechnologies\Grok\Tests\TestCase
{
    /** @test */
    public function test_command_works()
    {
        $this->artisan('hw')->assertExitCode(0);
        $this->artisan('hw')->expectsOutput('ElegantTechnologies/Grok/hw/tbd');
    }
}
