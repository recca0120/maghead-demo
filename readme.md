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

## Setup Connection

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
