<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    public function boot(): void
    {
        RateLimiter::for('api', static function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group([
                    base_path('routes/api/main.php'), 
                    base_path('routes/api/auth.php'),
                    base_path('routes/api/tests.php'),
                    base_path('routes/api/users.php'),
                    base_path('routes/api/company.php'),
                ]);

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
