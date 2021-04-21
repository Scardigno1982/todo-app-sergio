<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function Tasks()
    {
//        Esta es la tabla secundaria que trae los datos de la tabla Task por eso es hasMany
        return $this->hasMany(Task::class);
    }
}
