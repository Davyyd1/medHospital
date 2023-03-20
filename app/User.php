<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class User extends Model
{
    protected $table = 'users';

    // protected $fillable = ['nume','prenume','varsta','sex','cnp','telefon', 'cod_pacient'];

}