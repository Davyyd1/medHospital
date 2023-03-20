<?php

namespace App\Http\Controllers;

use App\UsersMedicInfo;
use Illuminate\Http\Request;

class MediciController extends Controller
{
    public function show(){
        $medici = UsersMedicInfo::all();
        return view('medici', compact('medici'));
    }
}
