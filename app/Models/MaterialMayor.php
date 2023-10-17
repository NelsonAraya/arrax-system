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
    public function isActive(){
      
        if($this->estado=='A'){
            return true;
        }else{
            return false;
        }
    }
    public function activaciones(){
        return $this->hasMany(Activacion::class,'material_mayor_id');
    }
    public function lastActivacion(){

        return $this->activaciones()->where('material_mayor_id',$this->id)->latest('id')->first();
    
    }
}
