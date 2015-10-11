<?php

namespace DMOVerse\Models\Market;

use Illuminate\Database\Eloquent\Model;

class MarketItem extends Model                          
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'market_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['market_id', 'price', 'trade_with'];
}
