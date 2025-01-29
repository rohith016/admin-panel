<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('admin.partials.sidebar', function ($view) {
            if (config('adminlte.menu_source') == "file") {
                $view->with('menuItems', config('adminlte.menu'));
            } else if (config('adminlte.menu_source') == "database") {
                $view->with('menuItems', Menu::with('submenu')
                                        ->where('parent_id', null)
                                        ->orderBy('order', 'asc')
                                        ->get()
                                        ->toArray()
                                    );
            }
        });
    }
}
