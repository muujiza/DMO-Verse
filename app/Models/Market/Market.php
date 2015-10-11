<?php

namespace DMOVerse\Models\Market;

use Illuminate\Database\Eloquent\Model;

class Market extends Model                          
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'market';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'description', 'type', 'time'];
}
