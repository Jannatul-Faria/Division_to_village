<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazilla extends Model
{
    /** @use HasFactory<\Database\Factories\UpazillaFactory> */
    use HasFactory;
    protected $fillable = [
        'upazilla_name',
        'division_id',
        'district_id',
        
    ];


}
