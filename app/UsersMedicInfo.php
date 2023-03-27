<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class UsersMedicInfo extends Model
{
    protected $table = 'users_medic_info';

    protected $fillable = ['avatar','nume_medic','prenume_medic','specialitate_medic','studii','program'];
}