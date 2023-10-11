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
}
