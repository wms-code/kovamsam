<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
protected $table = 'weight';
    
protected $fillable = ['name'];

protected function edit($id)
{
    
    return 'one';
}

}
