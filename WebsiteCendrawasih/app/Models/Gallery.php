<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_event',
        'date',
        'deskripsi'
    ];

    // public function fotos()
    // {
    //     return $this->hasMany(Foto::class, 'name_event', 'acara');
    // }
}
