<?php


namespace ElegantTechnologies\Grok;

class GrokWrangler
{
    private static array $arrGrokProviders = [];
    public static function grokMe(string $className) : self
    {
        static::$arrGrokProviders[] = $className;
    }
}
