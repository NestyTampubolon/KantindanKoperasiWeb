<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    use HasFactory;
    protected $table = 'pulsa';
    protected $primaryKey = 'id_pulsa';
}
