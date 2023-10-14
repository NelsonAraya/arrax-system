<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activacion extends Model
{
    use HasFactory;

    public function horaActivacion(){
    	return date('d-m-Y H:i:s',strtotime($this->created_at)); 
    }
    public function materialMayor(){
        return $this->belongsTo(MaterialMayor::class,'material_mayor_id');
    }
    
    public function usuario(){
        return $this->belongsTo(Usuario::class,'usuario_id');
    }
    
    public function usuarioCambio(){
        return $this->belongsTo(Usuario::class,'usuario_cambio_id');
    }
}
