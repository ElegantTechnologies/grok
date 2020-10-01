<?php


namespace ElegantTechnologies\Grok;

class GrokWrangler
{
    private static array $arrGrokProviders = [];
    public static function grokMe(string $className)
    {
        static::$arrGrokProviders[] = $className;
    }

    /* Return list of packages that registered for grokking */
    public static function grokkees(): array
    {
        return static::$arrGrokProviders;
    }
}
