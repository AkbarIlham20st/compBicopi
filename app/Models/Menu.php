<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu'; // nama tabel di database

    protected $fillable = [
        'nama_menu',
        'foto_menu',
        'deskripsi_menu',
        'harga_menu',
        'kategori',
    ];
}
