<?php

namespace ElegantTechnologies\Grok;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ElegantTechnologies\Grok\Grok
 */
class GrokFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'grok';
    }
}
