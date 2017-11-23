<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatiable
{
    use Illuminate\Auth\Authenticatiable;
    
}