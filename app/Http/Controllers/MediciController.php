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

class MediciController extends Controller
{
    public function show_profil_doctor(Request $request){
        $doctor = UsersMedicInfo::where('user_id', Auth::user()->id)
        ->leftjoin('users', 'users_medic_info.user_id', 'users.id')
        ->first();
        return view('profil.profil-doctor',compact('doctor'));
    }

    public function vizibil_pacient_profil_medic(Request $request, $id){
        $doctor = UsersMedicInfo::where('users_medic_info.id', $id)
        ->leftjoin('users', 'users_medic_info.user_id', 'users.id')
        ->first();
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
            ->paginate(8);
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
            ->paginate(8);
        return view('medici', compact('result', 'medici'));
    }

    public function actualizeaza_date_medic(Request $request)
    {
        $userMedicInfo = UsersMedicInfo::where('user_id', Auth::user()->id)
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
                // 'avatar' => $request->image,
                'nume_medic' => $request->nume,
                'prenume_medic' => $request->prenume,
                'specialitate_medic' => $request->specialitate,
                'studii' => $request->studii,
                'program' => $request->program,
                'descriere' => $request->descriere
            ]);

        $userAvatarUpdate = User::where('id', Auth::user()->id)->first();
        if($request->hasFile('image')){
            $destination_folder = 'public/images/';
            $image = $request->file('image');
            $image_name = time().rand().'.jpg';
            $path = $request->file('image')->storeAs($destination_folder, $image_name);
            $userAvatarUpdate->avatar = $image_name;
        }
        $userAvatarUpdate->update();

            return response(['mesaj' => '<div class="alert alert-success" role="alert">
            Datele pacientului au fost actualizate cu succes!</div>', 'status' => 1]);
        }
        return response(['mesaj' => '<div class="alert alert-danger" role="alert">
        ' . $validator->errors()->first() . '
      </div>', 'status' => 0]);
    }

    private function validate_input_medici()
    {
        return [
            'nume' => 'required',
            'prenume' => 'required',
            'specialitate' => 'required',
            'studii' => 'required',
            'program' => 'required',
            'descriere' => 'required'
        ];
    }
}
