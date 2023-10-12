<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialMayor extends Model
{
    use HasFactory;
    
    public function cia(){
        
        return $this->belongsTo(Cia::class,'cia_id','id');
    }

    public function usuarios(){

        return $this->belongsToMany(Usuario::class)->withTimestamps();;
    }
}
