<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeekHoliday extends Model
{
    /** The attributes that are mass assignable */
    protected $fillable = [
        'day',
    ];
}