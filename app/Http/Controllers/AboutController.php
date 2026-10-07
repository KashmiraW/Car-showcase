<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()

    {
        $introText = 'Bugatti Chiron Pur Sport';
        return view('about-us', compact('introText'));
    }
}
