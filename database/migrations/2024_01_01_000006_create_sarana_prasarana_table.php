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
        Schema::create('sarana_prasarana', function (Blueprint $table) {
            $table->id();
            $table->foreignId('satuan_pendidikan_id')->constrained('satuan_pendidikan');
            
            // Ruang-ruang
            $table->json('ruang_kelas')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('ruang_perpustakaan')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('lab_komputer')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('lab_bahasa')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('lab_ipa')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('lab_fisika')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('lab_biologi')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('ruang_kepala_sekolah')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('ruang_guru')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('ruang_tata_usaha')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            
            // WC/Toilet
            $table->json('wc_guru_laki')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('wc_guru_perempuan')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('wc_siswa_laki')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('wc_siswa_perempuan')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            
            // Peralatan
            $table->json('meja_siswa')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('kursi_siswa')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('papan_tulis')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            $table->json('komputer')->comment('{"baik": 0, "rusak_ringan": 0, "rusak_sedang": 0, "rusak_berat": 0, "rusak_total": 0}');
            
            $table->timestamps();
            
            // Indexes
            $table->index('satuan_pendidikan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_prasarana');
    }
};