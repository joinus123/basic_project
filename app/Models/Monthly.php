<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly extends Model
{
    use HasFactory;

    protected $fillable = [

            'h1',
         	'p1',
        	'current_amount',
        	'target_amount',
        	'percentage' ,
        	'image',
    ];
}
