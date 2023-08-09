<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Example data for about page
        $aboutText = 'Hello! I am Ume Habiba, a passionate and dedicated Computer Science student at Lahore University of Management Sciences (LUMS). With a strong foundation in programming and problem-solving, I am eager to contribute my skills and knowledge to meaningful projects. I thrive in collaborative environments and am always seeking new opportunities to expand my horizons.';
        
        return view('home.about', compact('aboutText'));
    }
}
