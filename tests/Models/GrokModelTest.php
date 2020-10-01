<?php

namespace ElegantTechnologies\Grok\Tests\Feature\Models;

use ElegantTechnologies\Grok\Models\GrokModel;
use ElegantTechnologies\Grok\Tests\TestCase;

class GrokModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {
        $model = GrokModel::create(['name' => 'John']);
        $this->assertDatabaseCount('grok', 1);
        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }
}
