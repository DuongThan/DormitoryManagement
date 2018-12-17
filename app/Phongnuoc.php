<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phongnuoc extends Model
{
    public $table = "Phong_nuoc";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
