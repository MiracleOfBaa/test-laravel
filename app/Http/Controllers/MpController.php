<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpController extends Controller
{
    public function hello(){
        return view('test.hello',['name' => 'unakpa']);
    }
    public function bye(){
        return view('test.bye',['name' => 'miracle']);
    }
}
