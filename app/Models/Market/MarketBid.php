<?php

namespace DMOVerse\Models\Market;

use Illuminate\Database\Eloquent\Model;

class MarketBid extends Model                          
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'market_bids';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['market_id', 'user_id', 'offer'];
}
