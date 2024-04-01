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
                    base_path('routes/api/admin/main.php'), 
                    base_path('routes/api/admin/auth.php'),
                    base_path('routes/api/admin/tests.php'),
                    base_path('routes/api/admin/users.php'),
                    base_path('routes/api/admin/company.php'),
                    base_path('routes/api/admin/articles.php'),
                    base_path('routes/api/admin/services.php'),
                    base_path('routes/api/admin/country.php'),
                    
                    base_path('routes/api/mobile/auth.php'),
                ]);

            Route::middleware(['api', 'localization'])
                ->prefix('{locale}/api')
                ->group([
                    base_path('routes/api/mobile/auth.php'),
                ]);
        });
    }
}
