<?php
Namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //defining table
    protected $table = 'vehicles';

    //values that can be filled
    protected $fillable = ['vehicleName'];
}