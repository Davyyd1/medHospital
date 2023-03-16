<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediciController extends Controller
{
    public function show(){
        return view('medici');
    }
}
