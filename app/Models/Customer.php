<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombres',
        'ap_paterno',
        'ap_materno',
        'fecha_nacimiento',
        'direccion',
        'colonia',
        'cp',
        'telefono',
        'capacidad',
        'credencial1',
        'credencial2',
        'baja',
    ];
    protected $table = 'customers';
    protected $primaryKey='id';


}
