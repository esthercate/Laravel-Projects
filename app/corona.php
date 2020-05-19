<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class corona extends Model
{
    protected $fillable = ['country_name', 'symptoms', 'cases'];
}

