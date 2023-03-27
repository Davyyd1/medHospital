<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\User as AppUser;
use App\User;
use App\UserInfo;
use App\UsersMedicInfo;
use Illuminate\Http\Request;
use Auth;
use Validator;

class WelcomeController extends Controller
{
    public function show_welcome(Request $request){
        $result = UsersMedicInfo::orderby('created_at', 'desc')->limit(3)->get();
        return view('/welcome',compact('result'));
    }
}

