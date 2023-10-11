<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cia extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->hasMany(Usuario::class,'cia_id','id')->orderBy('rol','ASC');
    }
    public function nombreCompleto(){

    	if($this->numero==100){
           return $this->nombre;  
        }else{
        return $this->nombre.' N° '.$this->numero;
        }
    }
}
