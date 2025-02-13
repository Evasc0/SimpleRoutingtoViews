<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet()
    {
        $userName = 'user';
        return view('greet', [
            'user' => $userName,]);
    }
}
