<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function campaigns()
    {
        return $this->belongsTo(Campaign::class,'campaign_id');
    }

    public function userd()
    {
        return $this->belongsTo(User::class,'donor_id');
    }
}



