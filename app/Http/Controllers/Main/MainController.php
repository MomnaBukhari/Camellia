<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\BaseController;

class MainController extends BaseController
{
    public function home()
    {
        return view('main.home');
    }

    public function join()
    {
        return view('main.join');
    }

    public function help()
    {
        return view('main.help');
    }
}
