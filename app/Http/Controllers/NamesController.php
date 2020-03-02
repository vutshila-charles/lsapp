<?php

namespace App\Http\Controllers;
use Illuminate\Http\request;
class NamesController extends Controller
{
    public function show()
    {
        return view('Names',['n1'=> 'Yanik','n2'=> 'Thulani','n3'=>'Charles']);
    }
}