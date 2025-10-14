<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    // menggunakan primary key default 'id' (sesuai migration)

    protected $fillable = [
        'nip',
        'nama_karyawan',
        'gaji_karyawan',
        'alamat',
        'jenis_kelamin',
        'departemen_id',
        'foto',
    ];

    public function departemen()
    {
        return $this->belongsTo('App\\Models\\Departemen', 'departemen_id');
    }
}
