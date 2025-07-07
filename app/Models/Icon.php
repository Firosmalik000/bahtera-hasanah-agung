<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    protected $table = 'icon';

    public $timestamps = false;

    protected $fillable = [
        'icon',
    ];


}
