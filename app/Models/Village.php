<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    /** @use HasFactory<\Database\Factories\VillageFactory> */
    use HasFactory;
    protected $fillable = [
        'village_name',
        'division_id',
        'district_id',
        'upazilla_id',
        'union_id',
        'word_id',
    ];

}
