<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'foto';

    protected $fillable = [
        'nama_file', 
        'acara', 
        'file_path'
    ];

    // public function gallery()
    // {
    //     return $this->belongsTo(Gallery::class, 'acara', 'name_event');
    // }
}
