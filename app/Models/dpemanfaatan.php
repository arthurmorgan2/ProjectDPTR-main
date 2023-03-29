<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FileUpload;

class dpemanfaatan extends Model
{
    //  use HasFactory;
    protected $table = "pemanfaatan";
    protected $fillable = ['kode_perizinan', 'kabupaten', 'kapanewon', 'kelurahan', 'desa', 'persil', 'luas', 'uraian', 'tanggal_mulai', 'tanggal_akhir', 'file_SK' . 'file_SK_2', 'file_SK_3', 'file_SK_4', 'file_SK_5', 'file_SK_2'];

    // relation
    public function files()
    {
        return $this->hasMany(FileUpload::class, 'id_pemanfaatan');
    }

    //scope
    public function scopeSearch($query, $kabupaten)
    {
        return $query->where('kabupaten', 'LIKE', "%{$kabupaten}%");
    }
}
