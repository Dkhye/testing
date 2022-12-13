<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function firas()
    {
        return view('firas_answer');
    }

    public function yj(){
        return view('yj');
    }
}
