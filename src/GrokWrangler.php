<?php


namespace ElegantTechnologies\Grok;

class GrokWrangler
{
    private static array $asrGrokProviders = [];
    public static function grokMe(string $fqnClassName, string $vendorNameCamelCase, string $packageNameCamelCase, string $pathOffRoot, string $bladePrefix): void
    {
        $arrParts = explode('\\', $fqnClassName);
        $vendorNameCamelCase = $arrParts[0];
        $packageNameCamelCase = $arrParts[1];
        $key = "{$vendorNameCamelCase}_{$packageNameCamelCase}";


        $vendorNameCamelCase = $arrParts[0];
        $packageNameCamelCase = $arrParts[1];
        $classNameCamelCase = $arrParts[2];// ignored

        $packageNameKebabCase = \Illuminate\Support\Str::kebab($packageNameCamelCase);
        $vendorNameLowerCase = strtolower($vendorNameCamelCase);
        static::$asrGrokProviders[$key] = [
            'className' => $classNameCamelCase,
            'vendorNameCamelCase' => $vendorNameCamelCase,
            'vendorNameLowerCase' => $vendorNameLowerCase,
            'vendorNameKebabCase' => \Illuminate\Support\Str::kebab($vendorNameCamelCase),
            'packageNameCamelCase' => $packageNameCamelCase,
            'packageNameKebabCase' => $packageNameKebabCase,
            'grokViewOffPackageRoot' => $vendorNameLowerCase.DIRECTORY_SEPARATOR.$packageNameKebabCase.DIRECTORY_SEPARATOR.$pathOffRoot,
            'bladePrefix' => $bladePrefix,
        ];
    }

    /* Return list of packages that registered for grokking */
    public static function grokkees(): array
    {
        return static::$asrGrokProviders;
    }



    public static function getAsrGrok_byStaticClass(string $fqnClassName): array
    {
        $arrParts = explode('\\', $fqnClassName);
        $vendorNameCamelCase = $arrParts[0];
        $packageNameCamelCase = $arrParts[1];

        return static::getAsrGrok_byVendorPackage($vendorNameCamelCase, $packageNameCamelCase);
    }
    public static function getAsrGrok_byVendorPackage(string $vendorNameCamelCase, string $packageNameCamelCase): array
    {
        $key = "{$vendorNameCamelCase}_{$packageNameCamelCase}";
        assert(key_exists($key, static::$asrGrokProviders), "key($key) was not in: ". implode(', ', array_keys(static::$asrGrokProviders)));

        return static::$asrGrokProviders[$key];
    }
}
