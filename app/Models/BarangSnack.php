<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangSnack extends Model
{
    use HasFactory;
    protected $table = 'barang_snack';
    protected $primaryKey = 'id_barang_snack';
}
