<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    /** @use HasFactory<\Database\Factories\UnionFactory> */
    use HasFactory;
    protected $fillable = [
        'union_name',
        'division_id',
        'district_id',
        'upazilla_id',
    ];
}
