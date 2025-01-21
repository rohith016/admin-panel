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


        // Publish routes/admin.php to routes directory
        $this->publishes([
            __DIR__ . '/routes/admin.php' => base_path('routes/admin.php'),
        ], 'admin-panel-routes');

        // php artisan vendor:publish --tag=admin-panel-routes

        // publish config/adminlte.php to config directory
        $this->publishes([
            __DIR__ . '/config/adminlte.php' => config_path('adminlte.php'),
        ], 'admin-panel-config');

        // php artisan vendor:publish --tag=admin-panel-config
        

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
