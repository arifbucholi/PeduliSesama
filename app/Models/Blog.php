<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'img_url', 'desc'];

    public static function findById($id)
    {
        return static::find($id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

