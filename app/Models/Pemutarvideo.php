<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemutarvideo extends Model
{
    use HasFactory;
    protected $table = 'pemutarvideos';
    protected $fillable = [
        'judul',
        'kategori',
        'harga',
        'deskripsi',
        'video',
    ];
}
