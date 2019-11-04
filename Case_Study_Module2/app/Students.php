<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table='students';

    protected $fillable =[
      'name','phone','address','group','point','capacity','image'
    ];
}
