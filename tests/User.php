<?php

namespace Tompec\UserSoftware\Tests;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tompec\UserSoftware\UserSoftware;

class User extends Authenticatable
{
    public function software()
    {
        return $this->hasMany(UserSoftware::class);
    }
}
