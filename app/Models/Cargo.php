<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    
    public function cargos(){
        return $this->hasMany(Cargo::class,'cargo_id','id')->orderBy('rol','ASC');
    }
}
