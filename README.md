### Source

> https://www.youtube.com/watch?v=BdGvI3W0f9E&t=644s

### GitHub Source ?

> https://github.com/psalmistcom/laravel_react_saas_with_stripe

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
> php artisan migrate:fresh --seed

### Controllers

> php artisan make:controller Feature2Controller

### FeatureResource used in Feature1Controller

> limit data : do not display created_at & updated_at

## Frontend

> Reusable Feature component : /resources/js/Components/Feature.jsx
> auth is available on every inertia page : HandleInertiaRequests.php

## Stripe

> credit CreditController
> composer require stripe/stripe-php
> php artisan make:resource PackageResource

## Templates fro pricing

> https://flowbite.com/blocks/marketing/pricing/

## Middleware Validate Tokens
