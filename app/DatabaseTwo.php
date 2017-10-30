<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatabaseTwo extends Model
{
    // Use database two connection
    protected $connection = 'mysql2';
}
