<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gunung extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    // protected $table='gunung';

    public function Gunung()
    {
        return $this->hasMany(Perizinan::class);
    }
}

