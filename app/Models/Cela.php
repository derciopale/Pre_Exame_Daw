<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cela extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cela', 'recluso', 'guarda'
    ];
}
