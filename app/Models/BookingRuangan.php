<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRuangan extends Model
{
    use HasFactory;
    protected $table = 'booking_ruangan';
    protected $primaryKey = 'id_booking';

    protected $fillable = ['kode_booking','id_user', 'tanggal_pemesanan','nama_ruangan','jam_mulai','jam_selesai','deskripsi','status'];
    
    public function user(){
        return $this->belongsTo(User::class, "id_user", "id_user");
    }
}
