<?php

namespace DMOVerse\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Char extends Model                          
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'characters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'level', 'tamer_type', 'server', 'guild'];
}
