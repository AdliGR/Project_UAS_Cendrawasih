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
        'file_path_foto',
        'file_path_foto_comp'
    ];

    // public function gallery()
    // {
    //     return $this->belongsTo(Gallery::class, 'acara', 'name_event');
    // }
}
