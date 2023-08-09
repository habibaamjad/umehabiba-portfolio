<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        // Example data for projects page
        $projects = [
            [
                'title' => 'Book Store',
                'description' => 'I developed a dynamic and user-friendly book store using Laravel, 
                                Bootstrap, and HTML, complete with a robust database management system. This project 
                                showcases my ability to create responsive web applications that seamlessly integrate 
                                front-end design with back-end functionality. Visitors can explore an extensive collection
                                of books, utilize search and filtering options, and experience smooth interactions, 
                                exemplifying my proficiency in modern web development technologies',
            ],
            [
                'title' => 'Employee CRM',
                'description' => 'I crafted an Employee CRM system using Laravel, 
                                Bootstrap, and HTML, providing a streamlined solution for managing 
                                personnel information. By leveraging my expertise in front-end
                                design and back-end development, I created an intuitive platform
                                for storing, updating, and retrieving employee data efficiently. 
                                This project underscores my ability to create functional and visually 
                                appealing business tools that enhance data organization and accessibility.',
            ],
            // Add more projects
        ];

        return view('home.projects', compact('projects'));
    }
}
