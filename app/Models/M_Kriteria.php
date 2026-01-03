<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Kriteria extends Model
{
    protected $table = "kriteria";
    public $timestamps = true;
    protected $fillable = ['namakriteria', 'bobot', 'nilai', 'active'];
}
