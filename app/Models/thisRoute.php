<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thisRoute extends Model
{
    protected $table = 'this_routes';

    //values that can be filled
    protected $fillable = ['startPoint', 'endPoint', 'vehicles', 'cost', 'time'];
}

