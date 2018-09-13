<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class WelcomeController extends Controller
{
    //

    public function index(Request $request){
        return view('welcome', ['topics' => Topic::orderBy('created_at', 'asc')->get()]);
    }
}
