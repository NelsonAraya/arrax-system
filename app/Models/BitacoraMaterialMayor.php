<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BitacoraMaterialMayor extends Model
{
    use HasFactory;

    public function matMayor(){
        return $this->belongsTo(MaterialMayor::class,'material_mayor_id','id');
    }

    public function conductor(){
        return $this->belongsTo(Usuario::class,'conductor_id','id');
    }

    public function obac(){
        return $this->belongsTo(Usuario::class,'obac_id','id');
    }
}
