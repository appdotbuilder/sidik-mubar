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
        Schema::create('satuan_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_satuan_pendidikan');
            $table->string('npsn')->unique()->comment('Nomor Pokok Sekolah Nasional');
            $table->string('bentuk_pendidikan');
            $table->enum('status_sekolah', ['negeri', 'swasta']);
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('nama_kepala_sekolah');
            $table->string('nip_kepala_sekolah');
            $table->string('hp_kepala_sekolah');
            $table->date('periode_data');
            $table->date('tmt_akreditasi')->nullable();
            $table->enum('akreditasi', ['A', 'B', 'C', 'tidak_terakreditasi'])->nullable();
            $table->string('nama_operator');
            $table->string('email_operator');
            $table->string('hp_operator');
            $table->timestamp('sinkron_terakhir')->nullable();
            $table->integer('pd_l')->default(0)->comment('Peserta Didik Laki-laki');
            $table->integer('pd_p')->default(0)->comment('Peserta Didik Perempuan');
            $table->integer('pd_total')->default(0)->comment('Total Peserta Didik');
            $table->integer('jumlah_rombel')->default(0)->comment('Jumlah Rombongan Belajar');
            $table->integer('jumlah_guru')->default(0);
            $table->integer('jumlah_tendik')->default(0)->comment('Tenaga Kependidikan');
            $table->integer('jumlah_bendahara_bos')->default(0)->comment('Bendahara BOS');
            $table->timestamps();
            
            // Indexes
            $table->index('npsn');
            $table->index('bentuk_pendidikan');
            $table->index('status_sekolah');
            $table->index('kecamatan');
            $table->index(['kecamatan', 'desa_kelurahan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satuan_pendidikan');
    }
};