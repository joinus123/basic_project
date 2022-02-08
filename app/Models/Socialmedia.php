<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    use HasFactory;

    protected $fillable = [

        'facebook_icon',
        'instragram_icon',
        'twitter_icon',
        'linkedin_icon',

    ];
}
