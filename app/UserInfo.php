<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class UserInfo extends Model
{
    protected $table = 'users_info';

    protected $fillable = ['nume','prenume','varsta','sex','cnp','telefon', 'cod_pacient'];

}