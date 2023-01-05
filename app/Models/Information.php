<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'address',
        'birthday',
        'image',
        'facebook',
        'twitter',
        'instagram',
        'github',
        'linkedin'
    ];
}
