<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $fillable = ['name','bio','img','body'];
}
