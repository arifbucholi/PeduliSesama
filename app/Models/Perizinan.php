<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perizinan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'alamat_tinggal',
        'nomor_telepon',
        'nomor_telepon_keluarga',
        'tanggal_pendakian'
    ];
public function perizinan()
{
    return $this->belongsTo(Gunung::class);
}

}

