<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('email');
            $table->string('no_telepon');
            $table->text('alamat');
            $table->text('catatan')->nullable();
            $table->string('upload_kk');
            $table->string('berkas_pendukung')->nullable();
            $table->string('tipe');
            $table->string('status')->default(0);
            $table->text('alasan_ditolak')->nullable();
            $table->string('hasil_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
