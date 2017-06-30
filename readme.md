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
