# Lumen Full Passport

A package to enhance Lumen with full Laravel Passport functionality.

## Installation

To install the package, run:

composer require matecardoso/lumen-full-passport

## Configuration

1. **Service Provider**

Register the service provider in your `bootstrap/app.php` file:

$app->register(MateCardoso\LumenFullPassport\LumenFullPassportServiceProvider::class);

2. **Middleware**

Configure the authentication middleware in your `bootstrap/app.php` file:

$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
    'client' => Laravel\Passport\Http\Middleware\CheckClientCredentials::class,
    'scope' => Laravel\Passport\Http\Middleware\CheckScopes::class,
    'scopes' => Laravel\Passport\Http\Middleware\CheckForAnyScope::class,
]);

3. **Migrations**

Run the Passport migrations:

php artisan migrate
php artisan passport:install

## Usage

Once the package is installed and configured, you can use all the features provided by Laravel Passport within your Lumen application.

## Contributing

If you find any issues or have suggestions for improvements, please submit an issue or a pull request.

## License

This project is licensed under the MIT License.
