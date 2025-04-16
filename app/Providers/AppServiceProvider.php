<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Provider\BookProvider;

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
        $this->app->singleton(\Faker\Generator::class, function () {
            $faker = \Faker\Factory::create();
            $faker->addProvider(new BookProvider($faker));
            return $faker;
        });
    }
}
