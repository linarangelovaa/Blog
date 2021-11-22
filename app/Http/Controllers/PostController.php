<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('index', [
            'title' => 'Clean Blog',
            'backgroundPhoto' => "img/home-bg.jpg",
            'small' => 'A blog theme by start Bootstrap'

        ]);
    }

    public function aboutme()
    {
        return view('aboutme', [
            'title' => 'About me',
            'backgroundPhoto' => "img/about-bg.jpg",
            'small' => 'This is what i do'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact Me',
            'backgroundPhoto' => "img/contact-bg.jpg",
            'small' => 'Have questions? I can answer!'

        ]);
    }

    public function sample()
    {
        return view('sample', [
            'title' => "Man must explore,and this is exploration adt it is greatest",
            'backgroundPhoto' => "img/post-sample-image.jpg",
            'subtitle' => 'Problems look mighty small from 150 miles up',
            'small' => 'Posted by start Bootstrap on 24 August,2018'
        ]);
    }
}