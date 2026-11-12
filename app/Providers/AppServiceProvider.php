<?php

namespace App\Providers;

use App\Http\Responses\FilamentLoginResponse;
use Filament\Auth\Http\Responses\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(LoginResponseContract::class, FilamentLoginResponse::class);
    }


    public function boot(): void
    {
        
    }
}
