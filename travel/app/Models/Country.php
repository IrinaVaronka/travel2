<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'season_start', 'season_end'];

    const SORT = [
        'default' => 'No sort',
        'title_asc' => 'By title A-Z',
        'title_desc' => 'By title Z-A',
    ];
}
