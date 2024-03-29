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
        \App\Console\Commands\ShowsRetriever::class,
        \App\Console\Commands\UpcomingShowsRetriever::class,
        \App\Console\Commands\OldShowsRemover::class,
    ];


    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('movie:released')->everyMinute();
        $schedule->command('movie:upcoming')->daily();
        $schedule->command('movie:remove')->daily();
    }
}
