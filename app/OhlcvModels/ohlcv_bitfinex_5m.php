<?php

namespace App\OhlcvModels;

use Illuminate\Database\Eloquent\Model;

class ohlcv_bitfinex_5m extends Model
{
    public $table = 'ohlcv_bitfinex_5m';

    public $fillable = ['base_id', 'quote_id', 'open', 'high', 'low', 'close', 'timestamp', 'volume',];
}