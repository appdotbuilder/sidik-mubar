<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\SatuanPendidikan
 *
 * @property int $id
 * @property string $nama_satuan_pendidikan
 * @property string $npsn
 * @property string $bentuk_pendidikan
 * @property string $status_sekolah
 * @property string $desa_kelurahan
 * @property string $kecamatan
 * @property string $kode_pos
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string $nama_kepala_sekolah
 * @property string $nip_kepala_sekolah
 * @property string $hp_kepala_sekolah
 * @property \Illuminate\Support\Carbon $periode_data
 * @property \Illuminate\Support\Carbon|null $tmt_akreditasi
 * @property string|null $akreditasi
 * @property string $nama_operator
 * @property string $email_operator
 * @property string $hp_operator
 * @property \Illuminate\Support\Carbon|null $sinkron_terakhir
 * @property int $pd_l
 * @property int $pd_p
 * @property int $pd_total
 * @property int $jumlah_rombel
 * @property int $jumlah_guru
 * @property int $jumlah_tendik
 * @property int $jumlah_bendahara_bos
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PesertaDidik> $pesertaDidik
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ptk> $ptk
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SaranaPrasarana> $saranaPrasarana
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan query()
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan whereNpsn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan whereBentukPendidikan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan whereStatusSekolah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SatuanPendidikan whereKecamatan($value)
 * @method static \Database\Factories\SatuanPendidikanFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class SatuanPendidikan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'satuan_pendidikan';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama_satuan_pendidikan',
        'npsn',
        'bentuk_pendidikan',
        'status_sekolah',
        'desa_kelurahan',
        'kecamatan',
        'kode_pos',
        'latitude',
        'longitude',
        'nama_kepala_sekolah',
        'nip_kepala_sekolah',
        'hp_kepala_sekolah',
        'periode_data',
        'tmt_akreditasi',
        'akreditasi',
        'nama_operator',
        'email_operator',
        'hp_operator',
        'sinkron_terakhir',
        'pd_l',
        'pd_p',
        'pd_total',
        'jumlah_rombel',
        'jumlah_guru',
        'jumlah_tendik',
        'jumlah_bendahara_bos',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
        'periode_data' => 'date',
        'tmt_akreditasi' => 'date',
        'sinkron_terakhir' => 'datetime',
        'pd_l' => 'integer',
        'pd_p' => 'integer',
        'pd_total' => 'integer',
        'jumlah_rombel' => 'integer',
        'jumlah_guru' => 'integer',
        'jumlah_tendik' => 'integer',
        'jumlah_bendahara_bos' => 'integer',
    ];

    /**
     * Get the peserta didik for the satuan pendidikan.
     */
    public function pesertaDidik(): HasMany
    {
        return $this->hasMany(PesertaDidik::class);
    }

    /**
     * Get the PTK for the satuan pendidikan.
     */
    public function ptk(): HasMany
    {
        return $this->hasMany(Ptk::class);
    }

    /**
     * Get the sarana prasarana for the satuan pendidikan.
     */
    public function saranaPrasarana(): HasMany
    {
        return $this->hasMany(SaranaPrasarana::class);
    }

    /**
     * Get the users associated with this satuan pendidikan.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}