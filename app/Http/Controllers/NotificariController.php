<?php

namespace App\Http\Controllers;

use App\UserInfo;
use App\UsersMedicInfo;
use App\Models\User;
use App\Programari;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Auth;
// use User;

class NotificariController extends Controller
{
   public function programari(Request $request)
   {
    
      $notificariUser = Programari::where('appointments.user_id', Auth::user()->id)->where('status',1)
      ->leftjoin('users_medic_info','appointments.medic_id', 'users_medic_info.id')
      ->leftjoin('users', 'users_medic_info.user_id', 'users.id')
      ->select('appointments.*','users.name as user_name','users_medic_info.nume_medic as nume_medic','users_medic_info.prenume_medic as prenume_medic','users.email as user_email','users_medic_info.specialitate_medic as specialitate')
      ->paginate(10);
      
      return view('notificari.show',compact('notificariUser'));
   }
   
}
