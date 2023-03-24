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
    public function show_profil_doctor(Request $request){
        $doctor = UsersMedicInfo::where('user_id', Auth::user()->id)->first();

        // $doctorShow = UsersMedicInfo::where('id', $id)->first();
        return view('profil.profil-doctor',compact('doctor'));
    }

    public function vizibil_pacient_profil_medic(Request $request, $id){
        $doctor = UsersMedicInfo::where('id', $id)->first();
        return view('profil.profil-medic',compact('doctor'));
    }


    public function show(Request $request)
    {
        // $medici = UsersMedicInfo::Paginate(5);
        $nume = $request->nume;
        $prenume = $request->prenume;
        $specialitate = $request->specialitate;
        $result = UsersMedicInfo::where('nume_medic', 'LIKE', "%" . $nume . "%")
            ->where('prenume_medic', 'LIKE', "%" . $prenume . "%")
            ->where('specialitate_medic', 'LIKE', '%' . $specialitate . '%')
            ->orderby('created_at','desc')
            ->paginate(3);
        return view('medici', compact( 'result'));
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
            ->orderby('created_at','desc')
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
