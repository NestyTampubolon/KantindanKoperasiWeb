<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangMakananMinuman extends Model
{
    use HasFactory;
    protected $table = 'keranjang_makanan_minuman';
    protected $primaryKey = 'id_keranjang_makanan_minuman';
}
