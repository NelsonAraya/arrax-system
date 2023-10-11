<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanguineo extends Model
{
    use HasFactory;
    
    public function sanguineos(){
        return $this->hasMany(Sanguineo::class,'sanguineo_id','id')->orderBy('rol','ASC');
    }
}
