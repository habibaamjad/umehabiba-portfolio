<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Example data for contact page
        $email = 'umyhabiba92@gmail.com';
        $linkedin = 'https://www.linkedin.com/in/ume-habiba-1ba017207';
        $github = 'https://github.com/habibaamjad';
        
        return view('home.contact', compact('email', 'linkedin', 'github'));
    }
}
