<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egitim extends Model
{
    use HasFactory;

    protected $fillable = [
        'okul_adi',
        'okudugu_yil',
        'okudugu_bolum'
    ];
}
