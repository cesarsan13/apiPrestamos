<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_rol',
        'rol',
        'baja',
    ];
    protected $table = 'roles';
    protected $primaryKey='id_rol';

    public function user(){
        return $this->belongsTo(User::class,'id_rol','id_rol');
    }
}
