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
        Schema::create('ptk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('satuan_pendidikan_id')->constrained('satuan_pendidikan');
            $table->string('nama');
            $table->string('nuptk')->nullable()->comment('Nomor Unik Pendidik dan Tenaga Kependidikan');
            $table->string('nik')->unique()->comment('Nomor Induk Kependudukan');
            $table->string('no_kk')->comment('Nomor Kartu Keluarga');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nip')->nullable()->comment('Nomor Induk Pegawai');
            $table->string('status_kepegawaian');
            $table->string('jenis_ptk')->comment('Jenis PTK: Guru/Tendik');
            $table->string('agama');
            $table->text('alamat_jalan');
            $table->string('rt');
            $table->string('rw');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->decimal('latitude_rumah', 10, 8)->nullable();
            $table->decimal('longitude_rumah', 11, 8)->nullable();
            $table->string('telepon_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->string('sk_cpns')->nullable();
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan')->nullable();
            $table->string('pangkat_golongan')->nullable();
            $table->string('sumber_gaji');
            $table->string('nama_ibu_kandung');
            $table->enum('status_perkawinan', ['belum_menikah', 'menikah', 'cerai_hidup', 'cerai_mati']);
            $table->string('nama_suami_istri')->nullable();
            $table->string('nip_suami_istri')->nullable();
            $table->string('pekerjaan_suami_istri')->nullable();
            $table->boolean('lisensi_kepala_sekolah')->default(false);
            $table->boolean('diklat_kepengawasan')->default(false);
            $table->boolean('keahlian_braille')->default(false);
            $table->boolean('keahlian_bahasa_isyarat')->default(false);
            $table->string('npwp')->nullable();
            $table->string('nama_wajib_pajak')->nullable();
            $table->timestamps();
            
            // Indexes
            $table->index('nuptk');
            $table->index('nik');
            $table->index('nip');
            $table->index('jenis_ptk');
            $table->index('satuan_pendidikan_id');
            $table->index(['satuan_pendidikan_id', 'jenis_ptk']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptk');
    }
};