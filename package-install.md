# Package install


### Step
- Install JWT : [link document](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/)
    ```
        composer require tymon/jwt-auth
        php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
        php artisan jwt:secret

    ```
- Install Fractal : [link document](https://github.com/spatie/laravel-fractal)
    ```
    composer require spatie/laravel-fractal
    php artisan vendor:publish --provider="Spatie\Fractal\FractalServiceProvider"
    ```
