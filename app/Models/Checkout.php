<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    // protected $guarded = [];

    protected $fillable =[
        'user_id',
        'camp_id',
        'card_number',
        'expired',
        'cvc',
        'is_paid',
    ];

    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-d', strtotime($value));
    }
}
