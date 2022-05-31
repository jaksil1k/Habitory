<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function home(){
        return view('home');
    }

    public function categories(){
        return view('categories');
    }
}
