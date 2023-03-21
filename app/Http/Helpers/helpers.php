<?php

use App\Models\User;
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

