<?php

namespace App\Http\Controllers;

use App\Medici;
use Illuminate\Http\Request;

class MediciController extends Controller
{
    public function show(){
        $medici = Medici::all();
        return view('medici', compact('medici'));
    }
}
