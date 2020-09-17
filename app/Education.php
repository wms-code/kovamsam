<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
protected $table = 'education';
    
protected $fillable = ['name'];

protected function edit($id)
{
    
    return 'one';
}

}
