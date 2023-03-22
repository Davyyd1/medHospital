<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\UserInfo;
use App\UsersMedicInfo;
use Illuminate\Http\Request;
use Auth;
use Validator;

class MediciController extends Controller
{
    public function show(Request $request)
    {
        $medici = UsersMedicInfo::orderby('created_at', 'DESC')->paginate(5);
        $nume = $request->nume;
        $prenume = $request->prenume;
        $specialitate = $request->specialitate;
        $result = UsersMedicInfo::where('nume_medic', 'LIKE', "%" . $nume . "%")
            ->where('prenume_medic', 'LIKE', "%" . $prenume . "%")
            ->where('specialitate_medic', 'LIKE', '%' . $specialitate . '%')
            ->paginate(3);
        return view('medici', compact('medici', 'result'));
    }

    public function cauta_medic(Request $request)
    {
        $medici = UsersMedicInfo::orderby('created_at', 'DESC')->paginate(5);
        $nume = $request->nume;
        $prenume = $request->prenume;
        $specialitate = $request->specialitate;
        $result = UsersMedicInfo::where('nume_medic', 'LIKE', "%" . $nume . "%")
            ->where('prenume_medic', 'LIKE', "%" . $prenume . "%")
            ->where('specialitate_medic', 'LIKE', '%' . $specialitate . '%')
            ->paginate(3);
        return view('medici', compact('result', 'medici'));
    }

    public function actualizeaza_date_medic(Request $request)
    {
        $userMedicInfo = UsersMedicInfo::where('user_id', Auth::user()->id)
        ->leftjoin('users', 'users_medic_info.user_id','users.id')
        ->first();
        $validator = Validator::make($request->input(), $this->validate_input_medici());
        if ($userMedicInfo) {
            if ($validator->fails()) {
                return response([
                    'status' => 0,
                    'mesaj' => '<div class="alert alert-danger" role="alert">
                    ' . $validator->errors()->first() . '
                  </div>'
                ]);
            }
            $userMedicInfo->update([
                'avatar' => $request->image,
                'nume_medic' => $request->nume,
                'prenume_medic' => $request->prenume,
                'specialitate_medic' => $request->specialitate,
                'studii' => $request->studii,
                'program' => $request->program
            ]);
            return response(['mesaj' => 'Datele medicului au fost actualizate cu succes!', 'status' => 1]);
        }
        return response(['mesaj' => 'Ceva nu a functionat bine!', 'status' => 0]);
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
                'cod_pacient' => $request->cod_pacient,
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
            'telefon' => 'required|digits:10',
            'cod_pacient' => 'required'
        ];
    }

    private function validate_input_medici()
    {
        return [
            'nume' => 'required',
            'prenume' => 'required',
            'specialitate' => 'required',
            'studii' => 'required',
            'program' => 'required'
        ];
    }
}
