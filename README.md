# Deepseek Laravel Wrapper

Laravel wrapper for **[Deepseek PHP client](https://github.com/deepseek-php/deepseek-php-client)** to seamless [deepseek AI](https://www.deepseek.com) API integration with Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require mattel-limbo/deepseek-laravel-wrapper
```

### Publishing Configuration File

```bash
php artisan vendor:publish --tag=deepseek
```
then add token to `.env` file
```php
DEEPSEEK_API_KEY="your_api_key"
```

## Usage

### Basic Usage

```php
use DeepSeekClient;

$deepseek = app(DeepSeekClient::class);
$response = $deepseek->query('Hello deepseek, I am Laravel Framework , how are you Today ^_^ ?')->run();
print_r("deepseek API response : " . $response);
```

**Note**: In easy mode, it will take defaults for all configs [Check Default Values](https://github.com/deepseek-php/deepseek-php-client/blob/master/src/Enums/Configs/DefaultConfigs.php)

### Advanced Usage

```php
use DeepSeekClient;

$deepseek = app(DeepSeekClient::class);

// Another way, with customization
$response = $deepseek
    ->query('Hello deepseek, how are you ?', 'system')
    ->query('Hello deepseek, my name is PHP ', 'user')
    ->withModel("deepseek-chat")
    ->setTemperature(1.5)
    ->run();

print_r("deepseek API response : " . $response);
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details on contributing to Sketch.

## Security

If you discover any security-related issues, please email daycodestudioproject@gmail.com instead of using the issue tracker.

## Credits

- [Daycode](https://github.com/dayCod)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


