## Laravel Maghead Demo

```bash
composer require maghead/laravel-bridge
```

在 `config/app.php` 註冊 Service Provider

```php
'providers' => [
    // ...
    Maghead\Laravel\MagheadServiceProvider::class,
    // ...
];
```

發佈設定檔

```bash
php artisan vendor:publish --provider="Maghead\Laravel\MagheadServiceProvider"
```



修改 .env 設定資料庫

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

建立資料庫

```bash
php artisan maghead:db create master
```



設定 Schema

`app/Model/TodoSchema.php`

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
