<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public $fillable = ['name', 'email', 'phone', 'company'];
}
