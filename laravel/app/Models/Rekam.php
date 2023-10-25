<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam extends Model
{
    use HasFactory;
    public $table = "rekam";
    protected $fillable = [
        'Dokter',
        'Pasien',
        'Keterangan',
        'Penyakit',
        'Suhu',
        'Image'
    ];


}
