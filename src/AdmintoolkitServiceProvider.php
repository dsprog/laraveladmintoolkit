<?php
namespace Dsprog\Laraveladmintoolkit;

use Illuminate\Support\ServiceProvider;

class AdmintoolkitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dump(__METHOD__);
    }

    public function register()
    {
        //
    }
}
