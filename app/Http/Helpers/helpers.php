<?php

use App\Models\User;
use App\Programari;
use App\UserInfo;
use App\UsersMedicInfo;

if(!function_exists('get_medic_img'))
{
    function get_medic_img($medic_id)
    {
        $medic = UsersMedicInfo::where('user_id', $medic_id)
        ->leftjoin('users', 'users_medic_info.user_id', 'users.id')
        ->first();

        if ($medic)
            return $medic->avatar; 
    }
}

if(!function_exists('get_medic_appointments'))
{
    function get_medic_appointments($medic_id)
    {
        $medic = UsersMedicInfo::where('users_medic_info.user_id', $medic_id)
        ->leftjoin('appointments', 'users_medic_info.id', 'appointments.medic_id')
        ->leftjoin('users_info', 'appointments.pacient_id', 'users_info.id')
        ->get();
        
        return $medic;
    }
}

if(!function_exists('get_pacient_id'))
{
    function get_pacient_id($pacient_id)
    {
        $pacient = UserInfo::where('users_info.id', $pacient_id)
        ->first();
        
        return $pacient->id;
    }
}

