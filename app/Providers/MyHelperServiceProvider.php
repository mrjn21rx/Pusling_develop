<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class MyHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        require_once app_path('Helpers/myHelper.php');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('read', function ($user, $url) {
            // Asumsi user memiliki relasi izin dan menggunakan Spatie Permission
            return $user->hasPermissionTo('read ' . $url); // Pastikan format izin sesuai
        });
    }
}   