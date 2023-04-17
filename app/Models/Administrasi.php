<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    //use HasFactory;
    protected $table = "administrasi";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'desa', 'tgl_masuk', 'tindak', 'pengembalian', 'proses_kasultanan', 'jawaban_kasultanan', 'proses_biro', 'jawaban_biro', 'file_SK' . 'file_SK_2', 'file_SK_3', 'file_SK_4', 'file_SK_5'];
}
