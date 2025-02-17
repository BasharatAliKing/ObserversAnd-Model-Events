<?php

namespace App\Providers;

use App\Models\Post;
use App\Observers\PostObserver;
use App\Observers\UserObserver;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Post::observe(PostObserver::class);
    }
}
