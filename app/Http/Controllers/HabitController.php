<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;

class HabitController extends Controller
{
    public function userPanel(){
        $habits = Habit::orderBy("created_at")->get();

        return view('create-habit', [
           'habits' => $habits,
        ]);
    }
}
