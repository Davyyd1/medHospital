<?php

namespace App\Http\Controllers;

use App\UserInfo;
use App\UsersMedicInfo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminMediciController extends Controller
{
    public function show_admin(){
        $user = User::where('role_id','2')->get();
        return view('admin.adauga-medic',compact('user'));
    }

    public function adauga_medic(Request $request){
        $check_name=UsersMedicInfo::where('nume_medic',$request->nume)->first();
        if(!$check_name)
        {   
            $validator=Validator::make($request->input(),$this->validate_input());
            if ($validator->fails()) {
                return response([
                    'status'=>0,
                    'mesaj'=>'<div class="alert alert-danger" role="alert">
                    '.$validator->errors()->first().'
                  </div>' 
                ]);
             }

            $user=new User();
            $user->role_id = '3';
            $user->name = $request->nume.' '.$request->prenume;
            $user->email=$request->email;
            $user->password= Hash::make($request->parola);
            
            if($request->hasFile('image')){
                $destination_folder = 'public/images';
                $image = $request->file('image');
                $image_name = time().rand().'.jpg';
                $path = $request->file('image')->storeAs($destination_folder, $image_name);
                $user->avatar = $image_name;
            }
            $user->save();
            $medic = new UsersMedicInfo();
            $medic->user_id = $user->id;
            $medic->nume_medic = $request->nume;
            $medic->prenume_medic = $request->prenume;
            $medic->specialitate_medic = $request->specialitate;
            $medic->studii = $request->studii;
            $medic->program = $request->program;
            $medic->descriere = $request->descriere;
            $medic->save();
            return response([
                'status'=>1,
                'mesaj'=>'<div class="alert alert-success" role="alert">
                Medicul a fost adaugat cu succes!</div>' 
            ]);
        }
    }
    private function validate_input()
    {
        return [
            'nume'=>'required',
            'prenume'=>'required',
            'email' => 'required|email',
            'parola' => 'required',
            'specialitate'=>'required',
            'studii'=>'required',
            'program'=>'required',
            'descriere' => 'required'
        ];
    }

}
