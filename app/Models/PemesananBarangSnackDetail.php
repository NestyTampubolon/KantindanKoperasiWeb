<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananBarangSnackDetail extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_barang_snack_detail';
    protected $primaryKey = 'id_pemesanan_barang_snack_detail';

    protected $fillable = ['id_barang_snack','id_pemesanan','kuantitas','total_harga'];
    public function pemesanan(){
        return $this->belongsTo(PemesananBarangSnack::class, "id_pemesanan", "id_pemesanan_barang_snack");
    }

    public function barangsnack(){
        return $this->belongsTo(BarangSnack::class, "id_barang_snack", "id_barang_snack");
    }
}
