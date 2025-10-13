<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'nip';   // <-- kasih tau Laravel
    public $incrementing = false;    // kalau NIP bukan auto increment
    protected $keyType = 'int';   // kalau nip varchar, kalau integer ubah ke 'int'

    protected $fillable = [
        'nip',
        'nama_karyawan',
        'gaji_karyawan',
        'alamat',
        'jenis_kelamin',
        'foto',
    ];
}
