<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcaste extends Model
{
protected $table = 'subcaste';
    
protected $fillable = ['name','remarks','caste_id'];

 
}
