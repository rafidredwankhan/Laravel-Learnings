<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return 'Hello';
    }
    public function user2(){
        return view('welcome');
    }
}
