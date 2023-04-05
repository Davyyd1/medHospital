<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\UserInfo;
use App\UsersMedicInfo;
use Illuminate\Http\Request;
use Auth;
use Validator;

class PaginaController extends Controller
{
    public function show(){
        return view('boostrapDTP');
    }
    public function showJQ(){
        return view('jqueryDTP');
    }
}
