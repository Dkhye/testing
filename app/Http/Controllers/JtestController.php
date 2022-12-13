<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JtestController extends Controller
{
    public function index()
    {
       return view('index');
       //this code is to show the index.blade.php
    }
}
