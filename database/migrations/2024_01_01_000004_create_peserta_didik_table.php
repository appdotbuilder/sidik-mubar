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
        Schema::create('peserta_didik', function (Blueprint $table) {
            $table->id();
            $table->foreignId('satuan_pendidikan_id')->constrained('satuan_pendidikan');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('nisn')->unique()->comment('Nomor Induk Siswa Nasional');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nik')->unique()->comment('Nomor Induk Kependudukan');
            $table->string('no_registrasi_akta_lahir')->nullable();
            $table->string('no_kk')->comment('Nomor Kartu Keluarga');
            $table->string('agama');
            $table->text('alamat_jalan');
            $table->string('rt');
            $table->string('rw');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('jenis_tinggal');
            $table->string('alat_transportasi');
            $table->string('telepon_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('no_kps')->nullable()->comment('Nomor KPS');
            $table->string('nomor_kip')->nullable()->comment('Nomor KIP');
            $table->string('nama_di_kip')->nullable();
            $table->string('nama_di_kks')->nullable();
            $table->boolean('layak_pip')->default(false);
            $table->text('alasan_layak_pip')->nullable();
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('rombel_saat_ini');
            $table->text('kebutuhan_khusus')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->decimal('latitude_rumah', 10, 8)->nullable();
            $table->decimal('longitude_rumah', 11, 8)->nullable();
            $table->decimal('berat_badan', 5, 2)->nullable()->comment('Kg');
            $table->decimal('tinggi_badan', 5, 2)->nullable()->comment('Cm');
            $table->decimal('lingkar_kepala', 5, 2)->nullable()->comment('Cm');
            $table->integer('jumlah_saudara_kandung')->nullable();
            $table->timestamps();
            
            // Indexes
            $table->index('nisn');
            $table->index('nik');
            $table->index('jenis_kelamin');
            $table->index('satuan_pendidikan_id');
            $table->index('rombel_saat_ini');
            $table->index(['satuan_pendidikan_id', 'jenis_kelamin']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_didik');
    }
};