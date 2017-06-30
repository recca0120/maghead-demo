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

## Creating Database

If you want to use PostgreSQL or MySQL as your backend database, you can create your database through the `maghead:db create` command:

```bash
php artisan maghead:db create master
```

## Adding Schema

Put the content below the the file `app/Model/TodoSchema.php`:

```php
<?php

namespace App\Model;

use Maghead\Schema\DeclareSchema;

class TodoSchema extends DeclareSchema
{
    public function schema()
    {
        $this->column('title')
            ->varchar(80)
            ->label('Todo');

        $this->column('done')
            ->boolean()
            ->label('Done')
            ->default(false);
    }
}
```

## Building the static class

```bash
php artisan maghead:schema build
```

## Building tables

```bash
php artisan maghead:sql
```
