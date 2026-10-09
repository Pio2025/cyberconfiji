<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['page'] = 'home';
        $data['_view'] = 'pages/home';
        return view('layouts/main',$data);
    }

    public function contact(): string
    {
        $data['page'] = 'contact';
        $data['_view'] = 'pages/contact';
        return view('layouts/main',$data);
    }

    public function schedule(): string
    {
        $data['page'] = 'schedule';
        $data['_view'] = 'pages/schedule';
        return view('layouts/main',$data);
    }
}
