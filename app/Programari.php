<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class Programari extends Model
{
    protected $table = 'appointments';

    protected $fillable = ['doctor_id','nume','prenume','varsta','sex','cnp','telefon','cod_pacient'];

}