<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends \Eloquent implements Authenticatable
{  
    use AuthenticableTrait;
    // ...
    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

}
