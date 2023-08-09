<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Ume Habiba';
        $title = 'Software Engineer';
        $description = 'Passionate software engineer with a love for building web applications.';
        
        return view('home.index', compact('name', 'title', 'description'));
    }
}