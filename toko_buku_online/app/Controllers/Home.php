<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function cart() {
        return view('cart');
        
    }
    public function search() {
        return view('search');
        
    }
    public function checkout() {
        return view('checkout');
        
    }
    public function submit() {
        return view('submit');
        
    }
    public function image($file=null)
    {
        return $this->response->download(WRITEPATH .'uploads/images/'.$file,null);
    }

}
