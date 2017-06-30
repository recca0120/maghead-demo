# Laravel Maghead Demo


## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `maghead/maghead-bridge`.

```bash
composer require maghead/maghead-bridge
```

Next, add your new provider to the providers array of `config/app.php`:

```php
'providers' => [
    // ...
    Maghead\Laravel\MagheadServiceProvider::class,
    // ...
];
```

Publish the storage configuration file.

```bash
php artisan vendor:publish --provider="Maghead\Laravel\MagheadServiceProvider"
```
