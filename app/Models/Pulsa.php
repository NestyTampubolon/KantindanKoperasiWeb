<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    use HasFactory;
    protected $table = 'pulsa';
    protected $primaryKey = 'id_pulsa';

    protected $fillable = [
        'nama',
        'harga'
    ];

    public function pemesanan_pulsa()
    {
        return $this->hasMany(Pemesanan_Pulsa::class);
    }
}
