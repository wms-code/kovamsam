<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
protected $table = 'age';
    
protected $fillable = ['name'];

protected function edit($id)
{
    
    return 'one';
}

}
