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

class ProgramareController extends Controller
{
   public function programare(Request $request, $id)
   {
      $medic = UsersMedicInfo::where('id', $id)->first();
      $doctor = UsersMedicInfo::where('user_id', Auth::user()->id)->first();
      $pacient = UserInfo::where('user_id', Auth::user()->id)->first();
      return view('programare-medic.programare', compact('medic', 'pacient', 'doctor'));
   }

   public function programare_submit(Request $request)
   {

      $pacient = UserInfo::where('user_id', Auth::user()->id)->first();
      $medic = UsersMedicInfo::where('user_id', Auth::user()->id)->first();

      $validator = Validator::make($request->input(), $this->validate_input());
      if ($pacient || $medic) {
         if ($validator->fails()) {
            return response([
               'status' => 0,
               'mesaj' => '<div class="alert alert-danger" role="alert">
                    ' . $validator->errors()->first() . '
                  </div>'
            ]);
         }
         $programare = new Programari();
         $programare->medic_id = $request->medic_id;
         $programare->nume = $request->nume;
         $programare->prenume = $request->prenume;
         $programare->varsta = $request->varsta;
         $programare->sex = $request->sex;
         $programare->cnp = $request->cnp;
         $programare->telefon = $request->telefon;
         if(!$medic){
            $programare->cod_pacient = $pacient->cod_pacient;
         }
         $programare->data = $request->data;
         $programare->save();

         return response([
            'status' => 1,
            'mesaj' => '<div class="alert alert-success" role="alert">
                Programarea a fost realizata cu succes!</div>'
         ]);
      }
      return response([
         'status' => 0,
         'mesaj' => '<div class="alert alert-danger" role="alert">
            ' . $validator->errors()->first() . '
          </div>'
      ]);
   }

   private function validate_input()
   {
      return [
         'nume' => 'required',
         'prenume' => 'required',
         'varsta' => 'required',
         'sex' => 'required',
         'cnp' => 'required',
         'telefon' => 'required|digits:10',
         'data' => 'required|unique:programari'
      ];
   }
}
