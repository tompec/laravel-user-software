<?php

namespace Tompec\UserSoftware;

use Illuminate\Database\Eloquent\Model;

class UserSoftware extends Model
{
    /**
     * The attributes that are mass not assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(config('user-software.user_model'));
    }

    /**
     * Set the data.
     *
     * @param  array $value
     * @return void
     */
    public function setDataAttribute($value)
    {
        $value = json_encode($value);
        $this->attributes['data'] = $value;
        $this->attributes['hash'] = sha1($value);
    }
}
