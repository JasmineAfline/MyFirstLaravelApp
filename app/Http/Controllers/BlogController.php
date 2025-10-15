<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // 📝 Example blog posts
        $posts = [
            [
                'title' => 'Getting Started with Laravel 10',
                'author' => 'Afline Jasmine',
                'date' => 'October 10, 2025',
                'content' => 'Learn the basics of Laravel 10 — routing, controllers, and Blade templates.'
            ],
            [
                'title' => 'Building a Portfolio with Tailwind CSS',
                'author' => 'Afline Jasmine',
                'date' => 'October 5, 2025',
                'content' => 'Tailwind CSS makes it easy to style your pages with utility classes.'
            ],
            [
                'title' => 'How to Connect Laravel with MySQL',
                'author' => 'Afline Jasmine',
                'date' => 'September 28, 2025',
                'content' => 'This guide walks you through setting up your database connection and migrations.'
            ],
        ];

        // Pass posts to the view
        return view('blogs', compact('posts'));
    }
}
