<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    /** @use HasFactory<\Database\Factories\WordFactory> */
    use HasFactory;
    protected $fillable = [
        'word_name',
        'division_id',
        'district_id',
        'upazilla_id',
        'union_id',
    ];

}
