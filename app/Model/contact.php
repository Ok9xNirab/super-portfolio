<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = ['email','phone','address'];
}
