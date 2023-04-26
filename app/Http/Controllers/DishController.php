<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;



class DishController extends Controller
{
    public function index(){
        return view ('dish');
    }

    
}