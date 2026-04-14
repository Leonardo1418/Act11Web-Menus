<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    public function home()   { return view('home'); }
    public function photos() { return view('photos'); }
    public function contact(){ return view('contact'); }
}