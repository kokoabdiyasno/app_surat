<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis_kelamin', 'tanggal_lahir', 'email', 'no_telepon', 'alamat', 'catatan', 'upload_kk', 'berkas_pendukung', 'tipe', 'status', 'hasil_surat', 'alasan_ditolak'];
}
