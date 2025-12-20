<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // WAJIB TAMBAHKAN INI

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Memaksa Laravel menghasilkan link HTTPS jika di server Railway
        if (app()->environment('production') || env('FORCE_HTTPS', false)) {
            URL::forceScheme('https');
        }
    }
}