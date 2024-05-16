<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuito extends Model
{
    use HasFactory;
    
    public function enlacetipo(){
        return $this->hasMany(EnlaceTipo::class);
    }
    public function metroethernet(){
        return $this->hasMany(MetroEthernet::class);
    }
}
