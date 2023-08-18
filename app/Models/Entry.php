<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id', 'oib', 'name', 'postcode', 'city', 'date', 'amount',
        'description', 'level_1', 'level_2', 'level_3', 'level_4',
        'function_level_1', 'function_level_2', 'function_level_3', 'function_level_4',
        'comment', 'update_date'
    ];

    protected $casts = [
        'level_1' => 'array',
        'level_2' => 'array',
        'level_3' => 'array',
        'level_4' => 'array',
        'function_level_1' => 'array',
        'function_level_2' => 'array',
        'function_level_3' => 'array',
        'function_level_4' => 'array',
    ];
}
