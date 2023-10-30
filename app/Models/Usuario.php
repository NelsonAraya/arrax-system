<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function soloNombre(){

        $this->nombres=explode(' ',$this->nombres)[0];

        return ucwords($this->nombres.' '.$this->apellidop);
    }
    public function runCompleto() {
        return number_format($this->id, 0,'.','.') . '-' . $this->dv;
    }
    public function cia(){

        return $this->belongsTo(Cia::class, 'cia_id');

    }
    public function cargo(){

        return $this->belongsTo(Cargo::class, 'cargo_id');

    }
    public function sanguineo(){

        return $this->belongsTo(Sanguineo::class, 'sanguineo_id');

    }
    public function matMayors(){
        
        return $this->belongsToMany(MaterialMayor::class)->withTimestamps();
    }
    public function ficha() {
        return $this->hasOne(FichaMedica::class,'usuario_id','id');
    }
    public function edad()
    {
        list($ano, $mes, $dia) = explode('-', $this->fecha_nacimiento);
        $edad = date('Y') - $ano - 1;
        if (date('m') > $mes || (date('m') == $mes && date('d') >= $dia)) {
            $edad++;
        }

        return $edad;
    }
    public function roles(){   
        return $this->belongsToMany(Role::class)->withTimestamps();
      }

    
}
