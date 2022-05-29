<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananPulsa extends Model
{
    use HasFactory;
    protected $table = 'pemesanan_pulsa';
    protected $primaryKey = 'id_pemesanan_pulsa';

    protected $fillable = ['kode_transaksi', 'tanggal_pemesanan','status','id_pulsa','id_user','nomor_telephone'];

    public function pulsa(){
        return $this->belongsTo(Pulsa::class, "id_pulsa", "id_pulsa");
    }

    public function user(){
        return $this->belongsTo(User::class, "id_user", "id_user");
    }
}
