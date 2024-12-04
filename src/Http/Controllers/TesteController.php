<?php

namespace Dsprog\Laraveladmintoolkit\Http\Controllers;

use App\Http\Controllers\Controller;

class TesteController extends Controller
{
    //
    public function __invoke()
    {
        return ['teste' => 'Olá mundo!'];
    }
}
