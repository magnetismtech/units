<?php

namespace Magnetism\Units;

use Illuminate\Support\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Magnetism\Units\Http\UnitController');
//        $this->app->make('Magnetism\Units\database\seeds\UnitSeeder');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';

//        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        if ($this->app->runningInConsole()) {
            // Export the migration
            if (!class_exists('CreatePostsTable')) {
                $this->publishes([
                    __DIR__ . '\database\migrations\create_units_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_units_table.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
        }
    }

}
