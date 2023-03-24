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
    
      $notificariUser = Programari::where('appointments.user_id', Auth::user()->id)
      ->leftjoin('users_medic_info','appointments.medic_id', 'users_medic_info.id')
      ->get();
      
      // $notificariMedic = Programari::where('appointments.medic_id', Auth::user()->id)
      // ->leftjoin('users_medic_info','appointments.medic_id','users_medic_info.id')
      // ->get();

      return view('notificari.show',compact('notificariUser'));
   }

   // public function programari_medic(Request $request)
   // {
      
   //    return view('notificari.show-medic', compact('notificariMedic'));
   // }
}
