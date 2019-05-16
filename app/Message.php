<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
    * Fields that are mass assignable
    *
    * @var array
    */
    protected $fillable = ['message'];

    // protected $appends = ['selfMessage'];

    /**
    * Returns true if the message belongs to the authenticated user
    *
    */
    public function getSelfMessageAttribute()
    {
        return $this->user_id === Auth::user()->id;
    }

    /**
    * Return the user that owns the message
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
