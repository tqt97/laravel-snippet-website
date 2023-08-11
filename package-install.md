# Package install


### Step
- Install JWT : [link document](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/)
    ```
        composer require tymon/jwt-auth
        php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
        php artisan jwt:secret
    
    ```
