<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index()
    {
        $name = 'Kementerian Ekonomi';
        return view('aboutus', compact('ke'));
    }
}
