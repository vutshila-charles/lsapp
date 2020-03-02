<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title ='Welcome to Laravel';
        return view('pages.index', compact('title'));//This variable will be passed to the page index 
    }

    public function about(){
        $title = 'About Us';

        return view('pages.about')->with('title', $title);//this variable will be passedd to the page About
    }

    public function services(){
        $data =array(
            'title' =>'Services',
            'services' => ['Web Design','Programming','SEO']

        );
        return view('pages.services')->with($data);
    }
}
