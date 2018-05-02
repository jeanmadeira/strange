<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrations();
    }

    private function loadMigrations()
    {
        $mainPath = database_path('migrations');

        $directories = glob($mainPath . '/*', GLOB_ONLYDIR);
        $allPath = [];
        foreach ($directories as $directory) {
            $otherDirectories = glob($directory . '/*', GLOB_ONLYDIR);

            foreach ($otherDirectories as $otherdirectory) {
                $allPath[] = $otherdirectory;
            }
        }

        $this->loadMigrationsFrom($allPath);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
