<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedServicio extends Model
{
    use HasFactory;
    public function red_equipo(){
        return $this->hasMany(RedEquipo::class);
    }
}
