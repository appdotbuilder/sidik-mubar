<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\PesertaDidik
 *
 * @property int $id
 * @property int $satuan_pendidikan_id
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $nisn
 * @property string $tempat_lahir
 * @property \Illuminate\Support\Carbon $tanggal_lahir
 * @property string $nik
 * @property string|null $no_registrasi_akta_lahir
 * @property string $no_kk
 * @property string $agama
 * @property string $alamat_jalan
 * @property string $rt
 * @property string $rw
 * @property string $desa_kelurahan
 * @property string $kecamatan
 * @property string $kode_pos
 * @property string $jenis_tinggal
 * @property string $alat_transportasi
 * @property string|null $telepon_hp
 * @property string|null $email
 * @property string|null $no_kps
 * @property string|null $nomor_kip
 * @property string|null $nama_di_kip
 * @property string|null $nama_di_kks
 * @property bool $layak_pip
 * @property string|null $alasan_layak_pip
 * @property string $nama_ayah
 * @property string $nik_ayah
 * @property string $pendidikan_ayah
 * @property string $pekerjaan_ayah
 * @property string $penghasilan_ayah
 * @property string $nama_ibu
 * @property string $nik_ibu
 * @property string $pendidikan_ibu
 * @property string $pekerjaan_ibu
 * @property string $penghasilan_ibu
 * @property string $rombel_saat_ini
 * @property string|null $kebutuhan_khusus
 * @property string|null $sekolah_asal
 * @property int|null $anak_ke
 * @property float|null $latitude_rumah
 * @property float|null $longitude_rumah
 * @property float|null $berat_badan
 * @property float|null $tinggi_badan
 * @property float|null $lingkar_kepala
 * @property int|null $jumlah_saudara_kandung
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SatuanPendidikan $satuanPendidikan
 * @property-read \App\Models\User|null $user
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|PesertaDidik newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PesertaDidik newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PesertaDidik query()
 * @method static \Illuminate\Database\Eloquent\Builder|PesertaDidik whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PesertaDidik whereNisn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PesertaDidik whereJenisKelamin($value)
 * @method static \Database\Factories\PesertaDidikFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class PesertaDidik extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peserta_didik';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'satuan_pendidikan_id',
        'nama',
        'jenis_kelamin',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'no_registrasi_akta_lahir',
        'no_kk',
        'agama',
        'alamat_jalan',
        'rt',
        'rw',
        'desa_kelurahan',
        'kecamatan',
        'kode_pos',
        'jenis_tinggal',
        'alat_transportasi',
        'telepon_hp',
        'email',
        'no_kps',
        'nomor_kip',
        'nama_di_kip',
        'nama_di_kks',
        'layak_pip',
        'alasan_layak_pip',
        'nama_ayah',
        'nik_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'nik_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'rombel_saat_ini',
        'kebutuhan_khusus',
        'sekolah_asal',
        'anak_ke',
        'latitude_rumah',
        'longitude_rumah',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'jumlah_saudara_kandung',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_lahir' => 'date',
        'layak_pip' => 'boolean',
        'anak_ke' => 'integer',
        'latitude_rumah' => 'decimal:8',
        'longitude_rumah' => 'decimal:8',
        'berat_badan' => 'decimal:2',
        'tinggi_badan' => 'decimal:2',
        'lingkar_kepala' => 'decimal:2',
        'jumlah_saudara_kandung' => 'integer',
    ];

    /**
     * Get the satuan pendidikan that owns the peserta didik.
     */
    public function satuanPendidikan(): BelongsTo
    {
        return $this->belongsTo(SatuanPendidikan::class);
    }

    /**
     * Get the user account associated with the peserta didik.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}