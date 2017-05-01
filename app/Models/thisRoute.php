<?php


namespace App\Models;


class thisRoute
{
    //defining table
    protected $table = 'routes';

    //values that can be filled
    protected $fillable = ['startPoint', 'endPoint', 'vehicles', 'cost', 'time'];
}