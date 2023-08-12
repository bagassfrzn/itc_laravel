<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItcController extends Controller
{
    public function liattabel(){
        return view('table');
    }

    public function liatform(){
        return view('form');
    }
    
}
