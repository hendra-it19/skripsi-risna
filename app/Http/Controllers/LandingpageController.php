<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function utama()
    {
        return view('pages.landingpage.utama');
    }
}
