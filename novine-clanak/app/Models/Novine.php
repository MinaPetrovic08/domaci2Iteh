<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novine extends Model
{
    use HasFactory;

    public function clanaks(){
        return $this->hasMany(Clanak::class);
    }

}
