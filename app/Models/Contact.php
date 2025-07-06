<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'desc',
        'image',
    ];

    protected $casts = [
        'title' => 'string',
        'desc' => 'string',
        'image' => 'string',
    ];

}
