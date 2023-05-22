<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipments extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'alamat',
        'region_id',
        'total_bayar',
        'payment_id',
    ];
}
