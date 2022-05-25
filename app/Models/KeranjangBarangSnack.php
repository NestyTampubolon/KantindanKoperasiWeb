<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangBarangSnack extends Model
{
    use HasFactory;
    protected $table = 'keranjang_barang_snack';
    protected $primaryKey = 'id_keranjang_barang_snack';
}
