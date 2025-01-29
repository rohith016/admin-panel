<?php

namespace Rohith\AdminPackage;

use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }
    public function boot()
    {
        // Publish assets to public directory
        $this->publishes([
            __DIR__ . '/dist' => public_path(),
        ], 'admin-panel-assets');

        // php artisan vendor:publish --tag=admin-panel-assets


        // Publish views to resources/views directory
        $this->publishes([
            __DIR__ . '/resources/admin' => resource_path('views/admin'),
        ], 'admin-panel-views');

        // php artisan vendor:publish --tag=admin-panel-views

        $this->publishes([
            __DIR__ . '/resources/auth' => resource_path('views/auth'),
        ], 'admin-panel-auth-views');

        // php artisan vendor:publish --tag=admin-panel-auth-views


        // Publish routes/admin.php to routes directory
        $this->publishes([
            __DIR__ . '/routes' => base_path('routes'),
        ], 'admin-panel-routes');

        // php artisan vendor:publish --tag=admin-panel-routes

        // publish config/ to config directory
        $this->publishes([
            __DIR__ . '/config' => config_path(),
        ], 'admin-panel-config');

        // php artisan vendor:publish --tag=admin-panel-config

        // publish Models/Menu.php to app/Models directory
        $this->publishes([
            __DIR__ . '/Models' => app_path('Models'),
        ], 'admin-panel-menu-model');
        // php artisan vendor:publish --tag=admin-panel-menu-model

        // publish database/migrations/ to database/migrations directory
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'admin-panel-migrations');
        // php artisan vendor:publish --tag=admin-panel-migrations

        // publish database/seeders/ to database/seeders directory
        $this->publishes([
            __DIR__ . '/database/seeders' => database_path('seeders'),
        ], 'admin-panel-seeders');
        // php artisan vendor:publish --tag=admin-panel-seeders


        // publish providers/MenuServiceProvider.php to app/Providers directory
        $this->publishes([
            __DIR__ . '/providers' => app_path('Providers'),
        ], 'admin-panel-menu-provider');
        // php artisan vendor:publish --tag=admin-panel-menu-provider

        // // Define the path to the providers.php file
        // $providersPath = base_path('bootstrap/providers.php');

        // // Define the class string to be added
        // $providerClass = "App\\Providers\\MenuServiceProvider::class,";

        // // Check if the file exists and is writable
        // if (file_exists($providersPath) && is_writable($providersPath)) {
        //     // Read the current content of the file
        //     $providersContent = file_get_contents($providersPath);

        //     // Check if the provider class is already present
        //     if (!str_contains($providersContent, $providerClass)) {
        //         // Locate the end of the array (before the closing bracket)
        //         $closingBracketPos = strrpos($providersContent, ']');

        //         if ($closingBracketPos !== false) {
        //             // Insert the provider class before the closing bracket
        //             $newProvidersContent = substr_replace(
        //                 $providersContent,
        //                 "    $providerClass" . PHP_EOL,
        //                 $closingBracketPos,
        //                 0
        //             );

        //             // Write the updated content back to the file
        //             file_put_contents($providersPath, $newProvidersContent);
        //         }
        //     }
        // }



        // Automatically add admin routes to web.php
        $webRoutesPath = base_path('routes/web.php');
        $adminRouteInclude = "require __DIR__.'/admin.php';";

        if (file_exists($webRoutesPath) && is_writable($webRoutesPath)) {
            $webRoutesContent = file_get_contents($webRoutesPath);

            if (!str_contains($webRoutesContent, $adminRouteInclude)) {
                file_put_contents($webRoutesPath, PHP_EOL . $adminRouteInclude, FILE_APPEND);
            }
        }

        // publish all things like run this command 
        // php artisan vendor:publish

    }
}
