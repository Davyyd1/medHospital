<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMediciController extends Controller
{
    public function show_admin(){
        return view('admin.adauga-medic');
    }
}
