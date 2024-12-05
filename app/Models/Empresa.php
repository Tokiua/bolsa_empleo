<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas'; 
    protected $primaryKey = 'id'; 
    protected $fillable = [ 
        'usuario', 'contrasena', 'nombre_empresa', 'pagina_web', 
        'descripcion_empresa', 'activida_empresa', 'email', 'pais', 'codigo_area'
    ];

    
}