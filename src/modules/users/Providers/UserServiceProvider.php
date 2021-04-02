<?php

namespace GSE\Users\Providers;

use GSE\Users\Repositories\Contracts\UserRepository;
use GSE\Users\Repositories\Eloquent\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
    }
}
