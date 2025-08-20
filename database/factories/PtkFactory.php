<?php

namespace Database\Factories;

use App\Models\Ptk;
use App\Models\SatuanPendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ptk>
 */
class PtkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\Ptk>
     */
    protected $model = Ptk::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jenisKelamin = $this->faker->randomElement(['L', 'P']);
        $jenisPtk = $this->faker->randomElement(['Guru', 'Tendik']);
        $statusKepegawaian = $this->faker->randomElement(['PNS', 'PPPK', 'GTY', 'PTY', 'Honorer']);
        
        return [
            'satuan_pendidikan_id' => SatuanPendidikan::factory(),
            'nama' => $this->faker->name($jenisKelamin === 'L' ? 'male' : 'female'),
            'nuptk' => $this->faker->optional()->numerify('################'),
            'nik' => $this->faker->unique()->numerify('################'),
            'no_kk' => $this->faker->numerify('################'),
            'jenis_kelamin' => $jenisKelamin,
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-60 years', '-22 years'),
            'nip' => $statusKepegawaian === 'PNS' ? $this->faker->numerify('##################') : null,
            'status_kepegawaian' => $statusKepegawaian,
            'jenis_ptk' => $jenisPtk,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'alamat_jalan' => $this->faker->streetAddress(),
            'rt' => $this->faker->numerify('##'),
            'rw' => $this->faker->numerify('##'),
            'desa_kelurahan' => $this->faker->randomElement([
                'Labuankenanga', 'Wakalambe', 'Lasalepa', 'Wabintingi', 'Lohia',
                'Kusambi', 'Lawa', 'Sawerigadi', 'Napabalano', 'Maginti'
            ]),
            'kecamatan' => $this->faker->randomElement(['Kusambi', 'Lawa', 'Sawerigadi', 'Napabalano', 'Maginti']),
            'kode_pos' => $this->faker->numerify('#####'),
            'latitude_rumah' => $this->faker->latitude(-5.5, -4.5),
            'longitude_rumah' => $this->faker->longitude(123.0, 124.0),
            'telepon_hp' => $this->faker->phoneNumber(),
            'email' => $this->faker->optional()->safeEmail(),
            'tugas_tambahan' => $this->faker->optional()->randomElement(['Kepala Sekolah', 'Wakil Kepala Sekolah', 'Kepala Perpustakaan', 'Bendahara']),
            'sk_cpns' => $statusKepegawaian === 'PNS' ? $this->faker->optional()->numerify('###/###/####') : null,
            'tanggal_cpns' => $statusKepegawaian === 'PNS' ? $this->faker->optional()->dateTimeBetween('-30 years', '-5 years') : null,
            'sk_pengangkatan' => $this->faker->optional()->numerify('###/###/####'),
            'tmt_pengangkatan' => $this->faker->dateTimeBetween('-30 years', '-1 year'),
            'lembaga_pengangkatan' => $this->faker->optional()->randomElement(['Kementerian Pendidikan', 'Dinas Pendidikan', 'Yayasan']),
            'pangkat_golongan' => $statusKepegawaian === 'PNS' ? $this->faker->randomElement(['II/a', 'II/b', 'II/c', 'III/a', 'III/b', 'III/c', 'III/d', 'IV/a', 'IV/b']) : null,
            'sumber_gaji' => $this->faker->randomElement(['APBN', 'APBD', 'Yayasan', 'Lainnya']),
            'nama_ibu_kandung' => $this->faker->name('female'),
            'status_perkawinan' => $this->faker->randomElement(['menikah', 'belum_menikah', 'cerai_hidup', 'cerai_mati']),
            'nama_suami_istri' => $this->faker->optional()->name(),
            'nip_suami_istri' => $this->faker->optional()->numerify('##################'),
            'pekerjaan_suami_istri' => $this->faker->optional()->randomElement(['PNS', 'Swasta', 'Wiraswasta', 'Ibu rumah tangga']),
            'lisensi_kepala_sekolah' => $this->faker->boolean(10),
            'diklat_kepengawasan' => $this->faker->boolean(5),
            'keahlian_braille' => $this->faker->boolean(2),
            'keahlian_bahasa_isyarat' => $this->faker->boolean(2),
            'npwp' => $this->faker->optional()->numerify('##.###.###.#-###.###'),
            'nama_wajib_pajak' => $this->faker->optional()->name(),
        ];
    }
}