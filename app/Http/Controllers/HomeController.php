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
            ->with("title", $title)
            ->with("subtitle", $subtitle)
            ->with("email", $email)
            ->with("address", $address)
            ->with("phone_number", $phone_number);
    }
}
