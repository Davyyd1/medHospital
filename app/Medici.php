<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class Medici extends Model
{
    protected $table = 'Medici';

    protected $fillable = ['nume_medic','prenume_medic','specialitate_medic','studii','program','image'];

}