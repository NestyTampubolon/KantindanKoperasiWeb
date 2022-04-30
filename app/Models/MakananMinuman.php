<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakananMinuman extends Model
{
    use HasFactory;
    protected $table = 'makanan_minuman';
    protected $primaryKey = 'id_makanan_minuman';
}
