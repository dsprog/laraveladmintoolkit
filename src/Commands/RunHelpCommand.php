<?php

namespace Dsprog\Laraveladmintoolkit\Commands;

use Illuminate\Console\Command;

class RunHelpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admintoolkit:help';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \Laravel\Prompts\intro('Run help...');
        \Laravel\Prompts\spin(fn() => sleep(2));
        \Laravel\Prompts\info('Done!');
    }
}
