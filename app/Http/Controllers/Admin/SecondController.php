<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;    

class SecondController extends Controller
{
    public function showString0()
    {
        return 'Welcome To The Second Controller0';
    }
    public function showString1()
    {
        return 'Welcome To The Second Controller1';
    }
    public function showString2()
    {
        return 'Welcome To The Second Controller2';
    }
    public function showString3()
    {
        return 'Welcome To The Second Controller3';
    }
}
