<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'email', 'no_telepon', 'alamat', 'catatan', 'upload_kk', 'berkas_pendukung', 'tipe', 'status', 'hasil_surat', 'alasan_ditolak'];

    /**
     * Get the User that owns the Surat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
