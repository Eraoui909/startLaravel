<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
    //

    public function sayWelcom()
    {
        return view('contact');
    }
}
