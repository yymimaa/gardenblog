<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanaman';
    protected $primaryKey = 'id_tanaman';
    public $timestamps = false;
}
