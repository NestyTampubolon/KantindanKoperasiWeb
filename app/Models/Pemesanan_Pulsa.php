<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan_Pulsa extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_number',
        'id_pulsa',
        'id_user'
    ];

    public function pulsa()
    {
        return $this->belongsTo(Pulsa::class, 'id_pulsa');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
