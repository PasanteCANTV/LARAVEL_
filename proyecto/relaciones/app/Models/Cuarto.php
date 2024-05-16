<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuarto extends Model
{
    use HasFactory;

    public function circuito(){
        return $this->hasOne(Circuito::class);
    }
    public function redservicio(){
        return $this->hasOne(RedServicio::class);
    }
    public function vozservicio(){
        return $this->hasOne(VozServicio::class);
    }
}
