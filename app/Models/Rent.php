<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_start',
        'date_end',
        'id_car_data',
        'user_id',
        'status',
    ];

    // public function car_data()
    // {
    //     return $this->belongsTo(CarData::class);
    // }

}
