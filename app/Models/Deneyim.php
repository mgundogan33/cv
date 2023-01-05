<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deneyim extends Model
{
    use HasFactory;

    protected $fillable = [
        'firma_adi',
        'firma_sektoru',
        'proje_adi',
        'proje_yil',
        'proje_yetkisi',
        'proje_tanimi'
    ];
}
