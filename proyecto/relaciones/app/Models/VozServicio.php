<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VozServicio extends Model
{
    use HasFactory;
    public function telef_line(){
        return $this->hasMany(TelefLine::class);
    }
    public function tele_device(){
        return $this->hasMany(TeleDevice::class);
    }
}
