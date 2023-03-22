<?php

namespace App\Http\Controllers;

use App\UserInfo;
use App\UsersMedicInfo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Auth;

class ProgramareController extends Controller
{
   public function programare(Request $request, $id)
   {
    return view('programare-medic.programare');
   }
}
