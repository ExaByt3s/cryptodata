<?php

namespace App\OhlcvModels;

use Illuminate\Database\Eloquent\Model;

class ohlcv_bitstamp_30m extends Model
{
    public $table = 'ohlcv_bitstamp_30m';

    public $fillable = ['base_id', 'quote_id', 'open', 'high', 'low', 'close', 'timestamp', 'volume',];
}