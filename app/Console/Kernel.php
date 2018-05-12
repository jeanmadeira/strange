<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        $dirs = array_filter(glob(base_path('routes') . DIRECTORY_SEPARATOR . '*'), 'is_dir');
        $fileName = 'console.php';

        foreach ($dirs as $dir) {
            if (file_exists($dir . DIRECTORY_SEPARATOR . $fileName)) {
                require $dir . DIRECTORY_SEPARATOR . $fileName;
            }
        }
    }
}
