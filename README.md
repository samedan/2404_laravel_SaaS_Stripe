### Source

> https://www.youtube.com/watch?v=BdGvI3W0f9E&t=644s

## Install Breeze

> composer require laravel/breeze
> php artisan breeze:install

> php artisan make:model Package -m
> php artisan make:model Transaction -m
> php artisan make:model Feature -m
> php artisan make:model UsedFeature -m

### User - New user gets 10 credits

> php artisan make:observer UserObserver
> /models/User.php -> #[ObservedBy(UserObserver::class)]
