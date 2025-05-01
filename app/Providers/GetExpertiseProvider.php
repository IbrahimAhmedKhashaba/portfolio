<?php

namespace App\Providers;

use App\Models\Expertise;
use Illuminate\Support\ServiceProvider;

class GetExpertiseProvider extends ServiceProvider
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
        //
        $expertise = Expertise::all();
        view()->share('expertise', $expertise);
    }
}
