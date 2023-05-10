<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
