<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Res_Adm',
        'Reg_Operador',
        'Categoria',
        'Operador',
        'Propietario',
        'Marca',
        'Modelo',
        'Capacidad',
        'Clase',
        'Placa',
        'Rutas_Aut',
        'Fecha_Emision',
        'Fecha_Inicio',
        'Fecha_Final',
        'Estado',
        'Qr',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @deprecated Use the "casts" property
     *
     * @var array
     */
    protected $dates = [
        'Fecha_Emision',
        'Fecha_Inicio',
        'Fecha_Final',
    ];
}
