<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giveback extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_start',
        'date_end',
        'id_car_data',
        'user_id',
        'status',
    ];
}
