<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatabaseOne extends Model
{
    // Use database one connection
    protected $connection = 'mysql';
}
