<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptologyPrice extends Model
{
    use HasFactory;

    protected $table = 'cryptology_prices';

    protected $primaryKey = 'id';
    protected $fillable = ['pair_id', 'bid_price', 'bid_amount', 'ask_price', 'ask_amount', 'created_at'];
    public $timestamps = false;
}
