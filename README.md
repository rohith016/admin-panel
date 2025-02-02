# E-commerce Package
A reusable Laravel package for admin panel


## Screen Shots

- Login Page

<img src="src/screenshots/login-full.png" width="400" height="400">

- Dashboard

<img src="src/screenshots/dashboard.png" width="800" height="400">

- Profile

<img src="src/screenshots/profile.png" width="800" height="400">



## Features
Preloaded Admin views includes layouts, dashboard, profile
Admin panel assets
Admin route file

## Installation

### Step 1: Require the Package
Install the package via Composer:



```bash
composer require rohith016/admin-panel

composer require rohith016/admin-panel:dev-main --dev

composer require rohith016/admin-panel:^1.0

```

### Step 2: Publish Resources
The package provides a range of resources (models, migrations, seeders, and factories). You can selectively publish resources using tags.

### Step 3: Publish the Service Provider
After requiring the package, Laravel should automatically discover the service provider. If not, register it in config/app.php:

```bash
'providers' => [
    // Other Service Providers
    Rohith\EcommercePackage\EcommerceServiceProvider::class,
];
```

## Usage
The package resources can be published to your Laravel application’s default structure as needed.

## Publish All Resources
To publish all available resources (models, migrations, seeders, and factories), run:

```bash
php artisan vendor:publish --provider="Rohith\AdminPackage\AdminPanelServiceProvider"
```

## Selective Publishing
Use the following commands to publish specific resources:

Publish Assets:

```bash
php artisan vendor:publish --tag=admin-panel-assets
```
Publish Views:

```bash
php artisan vendor:publish --tag=admin-panel-views
```
Publish Routes:

```bash
php artisan vendor:publish --tag=admin-panel-routes
```

Publish Config:
```bash
php artisan vendor:publish --tag=admin-panel-config
```

Publish Models:

```bash
php artisan vendor:publish --tag=admin-panel-menu-model
```

Publish Migrations:

```bash
php artisan vendor:publish --tag=admin-panel-migrations
```

Publish Seeders:

```bash
php artisan vendor:publish --tag=admin-panel-seeders
```


Publish MenuServiceProvider:

```bash

php artisan vendor:publish --tag=admin-panel-menu-provider

- bootstrap\providers.php

return [
    .........
    App\Providers\MenuServiceProvider::class
];

```

Manage Register page with config data
```bash
- routes\auth.php

// update this code

if (config('adminlte.login.registration')){
    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);
} else {
    Route::redirect('register', 'login')->name('register');
}

// add this code in guest section

Route::redirect('/', '/login')->name('home');


```




## Contributing
Contributions are welcome! Feel free to submit a pull request or open an issue for suggestions and improvements.

## License
This package is open-source software licensed under the MIT license.



