<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananBarangSnack extends Model
{
    use HasFactory;

    protected $table = "pemesanan_barang_snack";
    protected $primaryKey = "id_pemesanan_barang_snack";

    protected $fillable = ['kode_transaksi', 'tanggal_pemesanan_barang_snack','total_pembayaran','total_item','status','id_user','nama_penerima','nomor_telephone','catatan'];

    public function details(){
        return $this->hasMany(PemesananBarangSnackDetail::class, "id_pemesanan", "id_pemesanan_barang_snack");
    }

    public function user(){
        return $this->belongsTo(User::class, "id_user", "id_user");
    }
}
