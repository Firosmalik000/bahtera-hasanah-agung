<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $table = 'misi';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'data',
        'image',
    ];
    protected $casts = [
        'data' => 'array',

    ];

}
