<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard';

    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {

            Route::middleware('api')->prefix('api')->group(base_path('routes/api.php'));

            Route::middleware('web')->group(base_path('routes/web.php')); // Default Route

            Route::middleware(['web', 'auth'])->group(base_path('routes/auth/index.php')); // Auth Route

            Route::middleware(['web', 'auth'])->group(base_path('routes/settings/index.php')); // Settings Route

            Route::middleware(['web', 'auth', 'operator', 'admin', 'superadmin'])->prefix('operator')->group(base_path('routes/operator/index.php')); // Operator Route

            Route::middleware(['web', 'auth', 'admin', 'superadmin'])->prefix('admin')->group(base_path('routes/admin/index.php')); // Admin Route

            Route::middleware(['web', 'auth', 'superadmin'])->prefix('superadmin')->group(base_path('routes/superadmin/index.php')); // Super Admin Route
        });
    }
}
