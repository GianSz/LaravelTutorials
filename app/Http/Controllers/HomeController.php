<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $title = 'Contact Page';
        $subtitle = 'Contact Us';
        $email = 'email-fake@email.com';
        $address = 'Cra. fake # 69-69';
        $phone_number = '3010623428';

        return view('home.contact')
            ->with('title', $title)
            ->with('subtitle', $subtitle)
            ->with('email', $email)
            ->with('address', $address)
            ->with('phone_number', $phone_number);
    }

    public function about(): view
    {
        $data1 = 'About us - Online Store';
        $data2 = 'About us';
        $description = 'This is an about page ...';
        $author = 'Developed by: Gian Paul Sánchez Aristizábal';

        return view('home.about')
            ->with('title', $data1)
            ->with('subtitle', $data2)
            ->with('description', $description)
            ->with('author', $author);
    }
}
