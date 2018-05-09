<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        $dirs = array_filter(glob(base_path('routes') . DIRECTORY_SEPARATOR . '*'), 'is_dir');
        $fileName = 'channels.php';

        foreach ($dirs as $dir) {
            if (file_exists($dir . DIRECTORY_SEPARATOR . $fileName)) {
                require $dir . DIRECTORY_SEPARATOR . $fileName;
            }
        }
    }
}
