<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'author_id',
        'start_date',
        'dateline',
        'target_amount',
        'img_url',
        'status',
        'category',
        'no_rekening'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // public function author_id()
    // {
    //     return $this->belongsTo()
    // }

    public static function findById($id)
    {
        return static::find($id);
    }

    public function donations()
    {
        return $this->hasMany(Donations::class);
    }
}
