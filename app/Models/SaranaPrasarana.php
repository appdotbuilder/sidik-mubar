<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\SaranaPrasarana
 *
 * @property int $id
 * @property int $satuan_pendidikan_id
 * @property array $ruang_kelas
 * @property array $ruang_perpustakaan
 * @property array $lab_komputer
 * @property array $lab_bahasa
 * @property array $lab_ipa
 * @property array $lab_fisika
 * @property array $lab_biologi
 * @property array $ruang_kepala_sekolah
 * @property array $ruang_guru
 * @property array $ruang_tata_usaha
 * @property array $wc_guru_laki
 * @property array $wc_guru_perempuan
 * @property array $wc_siswa_laki
 * @property array $wc_siswa_perempuan
 * @property array $meja_siswa
 * @property array $kursi_siswa
 * @property array $papan_tulis
 * @property array $komputer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SatuanPendidikan $satuanPendidikan
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|SaranaPrasarana newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaranaPrasarana newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaranaPrasarana query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaranaPrasarana whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaranaPrasarana whereSatuanPendidikanId($value)
 * @method static \Database\Factories\SaranaPrasaranaFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class SaranaPrasarana extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sarana_prasarana';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'satuan_pendidikan_id',
        'ruang_kelas',
        'ruang_perpustakaan',
        'lab_komputer',
        'lab_bahasa',
        'lab_ipa',
        'lab_fisika',
        'lab_biologi',
        'ruang_kepala_sekolah',
        'ruang_guru',
        'ruang_tata_usaha',
        'wc_guru_laki',
        'wc_guru_perempuan',
        'wc_siswa_laki',
        'wc_siswa_perempuan',
        'meja_siswa',
        'kursi_siswa',
        'papan_tulis',
        'komputer',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'ruang_kelas' => 'array',
        'ruang_perpustakaan' => 'array',
        'lab_komputer' => 'array',
        'lab_bahasa' => 'array',
        'lab_ipa' => 'array',
        'lab_fisika' => 'array',
        'lab_biologi' => 'array',
        'ruang_kepala_sekolah' => 'array',
        'ruang_guru' => 'array',
        'ruang_tata_usaha' => 'array',
        'wc_guru_laki' => 'array',
        'wc_guru_perempuan' => 'array',
        'wc_siswa_laki' => 'array',
        'wc_siswa_perempuan' => 'array',
        'meja_siswa' => 'array',
        'kursi_siswa' => 'array',
        'papan_tulis' => 'array',
        'komputer' => 'array',
    ];

    /**
     * Get the satuan pendidikan that owns the sarana prasarana.
     */
    public function satuanPendidikan(): BelongsTo
    {
        return $this->belongsTo(SatuanPendidikan::class);
    }
}