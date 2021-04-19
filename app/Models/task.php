<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = ['id_user', 'name', 'id_statu','created_at','updated_at'];
}
