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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin_dinas', 'guru', 'siswa', 'masyarakat'])->default('masyarakat');
            $table->foreignId('satuan_pendidikan_id')->nullable()->constrained('satuan_pendidikan');
            $table->foreignId('peserta_didik_id')->nullable()->constrained('peserta_didik');
            $table->foreignId('ptk_id')->nullable()->constrained('ptk');
            
            // Indexes
            $table->index('role');
            $table->index('satuan_pendidikan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['satuan_pendidikan_id']);
            $table->dropForeign(['peserta_didik_id']);
            $table->dropForeign(['ptk_id']);
            $table->dropIndex(['role']);
            $table->dropIndex(['satuan_pendidikan_id']);
            $table->dropColumn(['role', 'satuan_pendidikan_id', 'peserta_didik_id', 'ptk_id']);
        });
    }
};