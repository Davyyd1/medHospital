<?php

namespace App\Http\Controllers;

use App\Medici;
use App\MediciImg;
use Illuminate\Http\Request;
use Validator;

class AdminMediciController extends Controller
{
    public function show_admin(){
        return view('admin.adauga-medic');
    }

    public function adauga_medic(Request $request){
        $check_name=Medici::where('nume_medic',$request->nume)->first();
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

            $medic=new Medici();
            $medic->nume_medic=$request->nume;
            $medic->prenume_medic=$request->prenume;
            $medic->specialitate_medic=$request->specialitate;
            $medic->studii=$request->studii;
            $medic->program=$request->program;
            if($request->hasFile('image')){
                $destination_folder = 'public/images';
                $image = $request->file('image');
                $image_name = time().rand().'.jpg';
                $path = $request->file('image')->storeAs($destination_folder, $image_name);
                $medic->image = $image_name;
            }
            
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
            'specialitate'=>'required',
            'studii'=>'required',
            'program'=>'required'
        ];
    }

}
