<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    public $table = "Phong";
    protected $primaryKey = 'id';
    public $timestamps = false;
}
