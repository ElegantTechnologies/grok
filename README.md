# :
[![License](https://img.shields.io/github/license/:eleganttechnologies/:grok)](https://github.com/:eleganttechnologies/:grok/blob/master/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/:eleganttechnologies/:grok.svg?style=flat-square)](https://packagist.org/packages/:eleganttechnologies/:grok)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:eleganttechnologies/:grok/run-tests?label=tests)](https://github.com/:eleganttechnologies/:grok/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/:eleganttechnologies/:grok/badge.svg?branch=master)](https://coveralls.io/github/:eleganttechnologies/:grok?branch=master)

[![Total Downloads](https://img.shields.io/packagist/dt/:eleganttechnologies/:grok.svg?style=flat-square)](https://packagist.org/packages/:eleganttechnologies/:grok)

This is a package that is meant to help provide in-sutro explanations to devs

## Installation

Via Composer


``` bash
composer require eleganttechnologies/grok #while in development, add repo and master-dev insert manually into composer and cdo composer update

php artisan vendor:publish --provider="ElegantTechnologies\Grok\GrokServiceProvider" 
```

[ ] Add the following line to your routes/web.php file...... oh, there must be a more laravel-ish way
``` php
{{-- in 'routes/web.php' --}}
require_once(base_path('vendor/eleganttechnologies/grok/routes/web.php'));
```

[ ] Add a link in the grok pages (wherever is appropriate for your site). In a fresh install of jetstream, you
would problably add it next to the 'Dashboard' link at the top.
``` html
{{-- in 'resources/views/navigation-dropdown.blade.php' --}}

<x-jet-nav-link href="/grok" :active="request()->routeIs('grok*')">
    Grok
</x-jet-nav-link>
``` 

Load the css and js.  
[ ] Add this to 'resources/views/layouts/app.blade.php'
``` html

<!-- In <head> -->
<head>
    ...
    <!-- Code highlighting 1 of 2-->
    <link href="/css/prism.css" rel="stylesheet" />
</head>

<body>
    ...
    <!-- Code highlighting 2 of 2 -->
    <script src="/js/prism.js"></script>
</body>

```


You can grok the routes (when .env(local)) by visiting 
    
http://test-eleganttechnologies.test/grok/ElegantTechnologies/Grok/string

http://test-eleganttechnologies.test/grok/ElegantTechnologies/Grok/controller

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$grok = new ElegantTechnologies\Grok();
echo $grok->echoPhrase('Hello, ElegantTechnologies!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:JJ Rohrer](https://github.com/:JJRohrer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
