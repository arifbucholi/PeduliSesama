<?php

namespace App\Models;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'donor_id',
        'campaign_id',
        'is_donor_hidden',
        'desc',
        'category',
    ];

    public function campaigns()
    {
        return $this->belongsTo(Campaign::class,'campaign_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'donor_id');
    }

}



