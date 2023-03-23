<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\UserInfo;
use App\UsersMedicInfo;
use Illuminate\Http\Request;
use Auth;
use Validator;

class PacientiController extends Controller
{
    public function show_profil_pacient(Request $request){
        $pacient = UserInfo::where('user_id', Auth::user()->id)->first();
        return view('profil.profil-pacient', compact('pacient'));
    }

    
    public function actualizeaza_date_pacient(Request $request)
    {
        $userInfo = UserInfo::where('user_id', Auth::user()->id)->first();
        $users = User::where('id', Auth::user()->id)->first();
        
        $validator = Validator::make($request->input(), $this->validate_input_pacienti());
        if ($userInfo) {
            if ($validator->fails()) {
                return response([
                    'status' => 0,
                    'mesaj' => '<div class="alert alert-danger" role="alert">
                    ' . $validator->errors()->first() . '
                  </div>'
                ]);
            }
            $userInfo->update([
                'nume' => $request->nume,
                'prenume' => $request->prenume,
                'varsta' => $request->varsta,
                'sex' => $request->sex,
                'cnp' => $request->cnp,
                'telefon' => $request->telefon,
            ]);
            if ($users) {
                $users->update([
                    'name' => $request->nume . ' ' . $request->prenume
                ]);
            }
            return response([
                'status' => 1,
                'mesaj' => '<div class="alert alert-success" role="alert">
                Datele pacientului au fost actualizate cu succes!</div>'
            ]);
        }
        return response([
            'status' => 0,
            'mesaj' => '<div class="alert alert-danger" role="alert">
            ' . $validator->errors()->first() . '
          </div>'
        ]);
    }

    private function validate_input_pacienti()
    {
        return [
            'nume' => 'required',
            'prenume' => 'required',
            'varsta' => 'required',
            'sex' => 'required',
            'cnp' => 'required',
            'telefon' => 'required|digits:10'
        ];
    }

}
