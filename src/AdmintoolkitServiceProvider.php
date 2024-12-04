<?php
namespace Dsprog\Laraveladmintoolkit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Dsprog\Laraveladmintoolkit\Commands\RunHelpCommand;
use Dsprog\Laraveladmintoolkit\Http\Controllers\TesteController;


class AdmintoolkitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            RunHelpCommand::class,
        ]);

        Route::get('/teste', [TesteController::class, '__invoke'])->name("teste");
    }

    public function register()
    {
        //
    }
}
