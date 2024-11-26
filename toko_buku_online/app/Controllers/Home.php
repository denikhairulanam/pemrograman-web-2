<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function cart(): string
    {
        return view('cart');
    }
    public function serch(): string
    {
        return view('serch');
    }
    public function checkout(): string
    {
        return view('checkout');
    }
    public function submit(): string
    {
        return view('submit');
    }
}
