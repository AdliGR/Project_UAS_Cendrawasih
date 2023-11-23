<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_acara',
        'detail_acara',
        'tanggal_acara',
        'penanggung_jawab',
        'jam',
    ];
}
