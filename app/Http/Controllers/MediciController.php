<?php

namespace App\Http\Controllers;

use App\UsersMedicInfo;
use Illuminate\Http\Request;

class MediciController extends Controller
{
    public function show(Request $request){
        $medici = UsersMedicInfo::orderby('created_at','DESC')->paginate(5);
        // $name = 'dad';
        $nume = $request->nume;
        $prenume = $request->prenume;
        $specialitate = $request->specialitate;
        $result = UsersMedicInfo::where('nume_medic','LIKE',"%".$nume."%")
        ->where('prenume_medic','LIKE',"%".$prenume."%")
        ->where('specialitate_medic','LIKE','%'.$specialitate.'%')
        ->paginate(3);
        return view('medici', compact('medici','result'));
    }
    public function cauta_medic(Request $request){
        $medici = UsersMedicInfo::orderby('created_at','DESC')->paginate(5);
        $nume = $request->nume;
        $prenume = $request->prenume;
        $specialitate = $request->specialitate;
        $result = UsersMedicInfo::where('nume_medic','LIKE',"%".$nume."%")
        ->where('prenume_medic','LIKE',"%".$prenume."%")
        ->where('specialitate_medic','LIKE','%'.$specialitate.'%')
        ->paginate(3);
        return view('medici', compact('result','medici'));
    }

}
