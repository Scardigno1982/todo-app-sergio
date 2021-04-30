<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;

//    mostramos los nombres de las columnas que queremos que sean rellenados

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'status_id',
    ];

    public function User()
    {
//        Trae los datos de la tabla de usuarios por eso es belongsto

        return $this->belongsTo(User::class);
    }

    public function Status()
    {
//        Trae los datos de la tabla de Status por eso es belongsto

        return $this->belongsTo(Status::class);
    }
}
