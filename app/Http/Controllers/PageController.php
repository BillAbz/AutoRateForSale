<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'heroTitle' => 'Welcome to My Automotive Journey',
            'heroText' => 'This mini website introduces who I am, my interest in cars, and my first steps in Laravel development.',
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About Me',
            'name' => 'Your Name',
            'study' => 'Programming Student',
            'location' => 'Belgium',
            'bio' => 'I am a student who enjoys technology, web development, and everything related to cars. This website was built with Laravel to practice the MVC pattern.',
        ]);
    }

    public function cars()
    {
        $cars = [
            [
                'name' => 'BMW M4',
                'type' => 'Sports Coupe',
                'description' => 'I like this car because of its sporty design, performance, and elegant interior.',
            ],
            [
                'name' => 'Audi RS6',
                'type' => 'Performance Wagon',
                'description' => 'The Audi RS6 combines speed, comfort, and practicality in one powerful car.',
            ],
            [
                'name' => 'Porsche 911',
                'type' => 'Iconic Sports Car',
                'description' => 'The Porsche 911 is one of the most recognizable and timeless sports cars in the world.',
            ],
        ];

        return view('cars', [
            'title' => 'Favorite Cars',
            'cars' => $cars,
        ]);
    }

    public function projects()
    {
        $projects = [
            'Learning Laravel and Blade templating',
            'Building navigation with routes and controllers',
            'Creating responsive page layouts with CSS',
            'Using forms and validation in Laravel',
        ];

        return view('projects', [
            'title' => 'Skills & Projects',
            'projects' => $projects,
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact',
        ]);
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email',
            'message' => 'required|min:10|max:1000',
        ]);

        return view('thanks', [
            'title' => 'Thank You',
            'name' => $validated['name'],
        ]);
    }
}