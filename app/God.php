<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class God extends Model
{
protected $table = 'god';
    
protected $fillable = ['name','remarks','naadu_id','place_id'];

 
}
