<?php

namespace App\Models;

use App\Model;

class User
    extends Model
{
    const TABLE = 'users';

    public static function isIn()
    {
        return $_SESSION['user']['isIn'];
    }
}