<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarData extends Model
{
    use HasFactory;

    protected  $fillable = [
        'merk',
        'model',
        'plat_no',
        'tarif',
        'stock',
        'is_available',
        
    ];

}
