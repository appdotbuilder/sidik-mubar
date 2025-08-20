<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Ptk
 *
 * @property int $id
 * @property int $satuan_pendidikan_id
 * @property string $nama
 * @property string|null $nuptk
 * @property string $nik
 * @property string $no_kk
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property \Illuminate\Support\Carbon $tanggal_lahir
 * @property string|null $nip
 * @property string $status_kepegawaian
 * @property string $jenis_ptk
 * @property string $agama
 * @property string $alamat_jalan
 * @property string $rt
 * @property string $rw
 * @property string $desa_kelurahan
 * @property string $kecamatan
 * @property string $kode_pos
 * @property float|null $latitude_rumah
 * @property float|null $longitude_rumah
 * @property string|null $telepon_hp
 * @property string|null $email
 * @property string|null $tugas_tambahan
 * @property string|null $sk_cpns
 * @property \Illuminate\Support\Carbon|null $tanggal_cpns
 * @property string|null $sk_pengangkatan
 * @property \Illuminate\Support\Carbon|null $tmt_pengangkatan
 * @property string|null $lembaga_pengangkatan
 * @property string|null $pangkat_golongan
 * @property string $sumber_gaji
 * @property string $nama_ibu_kandung
 * @property string $status_perkawinan
 * @property string|null $nama_suami_istri
 * @property string|null $nip_suami_istri
 * @property string|null $pekerjaan_suami_istri
 * @property bool $lisensi_kepala_sekolah
 * @property bool $diklat_kepengawasan
 * @property bool $keahlian_braille
 * @property bool $keahlian_bahasa_isyarat
 * @property string|null $npwp
 * @property string|null $nama_wajib_pajak
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SatuanPendidikan $satuanPendidikan
 * @property-read \App\Models\User|null $user
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|Ptk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ptk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ptk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ptk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ptk whereNuptk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ptk whereJenisPtk($value)
 * @method static \Database\Factories\PtkFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class Ptk extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ptk';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'satuan_pendidikan_id',
        'nama',
        'nuptk',
        'nik',
        'no_kk',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nip',
        'status_kepegawaian',
        'jenis_ptk',
        'agama',
        'alamat_jalan',
        'rt',
        'rw',
        'desa_kelurahan',
        'kecamatan',
        'kode_pos',
        'latitude_rumah',
        'longitude_rumah',
        'telepon_hp',
        'email',
        'tugas_tambahan',
        'sk_cpns',
        'tanggal_cpns',
        'sk_pengangkatan',
        'tmt_pengangkatan',
        'lembaga_pengangkatan',
        'pangkat_golongan',
        'sumber_gaji',
        'nama_ibu_kandung',
        'status_perkawinan',
        'nama_suami_istri',
        'nip_suami_istri',
        'pekerjaan_suami_istri',
        'lisensi_kepala_sekolah',
        'diklat_kepengawasan',
        'keahlian_braille',
        'keahlian_bahasa_isyarat',
        'npwp',
        'nama_wajib_pajak',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_cpns' => 'date',
        'tmt_pengangkatan' => 'date',
        'latitude_rumah' => 'decimal:8',
        'longitude_rumah' => 'decimal:8',
        'lisensi_kepala_sekolah' => 'boolean',
        'diklat_kepengawasan' => 'boolean',
        'keahlian_braille' => 'boolean',
        'keahlian_bahasa_isyarat' => 'boolean',
    ];

    /**
     * Get the satuan pendidikan that owns the PTK.
     */
    public function satuanPendidikan(): BelongsTo
    {
        return $this->belongsTo(SatuanPendidikan::class);
    }

    /**
     * Get the user account associated with the PTK.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}