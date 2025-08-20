<?php

namespace Database\Factories;

use App\Models\PesertaDidik;
use App\Models\SatuanPendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PesertaDidik>
 */
class PesertaDidikFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\PesertaDidik>
     */
    protected $model = PesertaDidik::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jenisKelamin = $this->faker->randomElement(['L', 'P']);
        
        return [
            'satuan_pendidikan_id' => SatuanPendidikan::factory(),
            'nama' => $this->faker->name($jenisKelamin === 'L' ? 'male' : 'female'),
            'jenis_kelamin' => $jenisKelamin,
            'nisn' => $this->faker->unique()->numerify('##########'),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-18 years', '-6 years'),
            'nik' => $this->faker->unique()->numerify('################'),
            'no_registrasi_akta_lahir' => $this->faker->optional()->numerify('####-##-######'),
            'no_kk' => $this->faker->numerify('################'),
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
            'jenis_tinggal' => $this->faker->randomElement(['Bersama orang tua', 'Wali', 'Kos', 'Asrama', 'Panti asuhan']),
            'alat_transportasi' => $this->faker->randomElement(['Jalan kaki', 'Sepeda', 'Sepeda motor', 'Mobil pribadi', 'Angkutan umum']),
            'telepon_hp' => $this->faker->optional()->phoneNumber(),
            'email' => $this->faker->optional()->safeEmail(),
            'no_kps' => $this->faker->optional()->numerify('##########'),
            'nomor_kip' => $this->faker->optional()->numerify('##########'),
            'nama_di_kip' => $this->faker->optional()->name(),
            'nama_di_kks' => $this->faker->optional()->name(),
            'layak_pip' => $this->faker->boolean(30),
            'alasan_layak_pip' => $this->faker->optional()->sentence(),
            'nama_ayah' => $this->faker->name('male'),
            'nik_ayah' => $this->faker->numerify('################'),
            'pendidikan_ayah' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3', 'Tidak sekolah']),
            'pekerjaan_ayah' => $this->faker->randomElement(['Petani', 'Nelayan', 'Pedagang', 'PNS', 'TNI/Polri', 'Swasta', 'Wiraswasta']),
            'penghasilan_ayah' => $this->faker->randomElement(['< 500.000', '500.000 - 999.999', '1.000.000 - 1.999.999', '2.000.000 - 4.999.999', '> 5.000.000']),
            'nama_ibu' => $this->faker->name('female'),
            'nik_ibu' => $this->faker->numerify('################'),
            'pendidikan_ibu' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3', 'Tidak sekolah']),
            'pekerjaan_ibu' => $this->faker->randomElement(['Ibu rumah tangga', 'Petani', 'Pedagang', 'PNS', 'Swasta', 'Wiraswasta']),
            'penghasilan_ibu' => $this->faker->randomElement(['< 500.000', '500.000 - 999.999', '1.000.000 - 1.999.999', '2.000.000 - 4.999.999', '> 5.000.000']),
            'rombel_saat_ini' => $this->faker->randomElement(['VII-A', 'VII-B', 'VIII-A', 'VIII-B', 'IX-A', 'IX-B']),
            'kebutuhan_khusus' => $this->faker->optional()->randomElement(['Tidak ada', 'Tuna netra', 'Tuna rungu', 'Tuna daksa', 'Tuna grahita']),
            'sekolah_asal' => $this->faker->optional()->company() . ' School',
            'anak_ke' => $this->faker->numberBetween(1, 5),
            'latitude_rumah' => $this->faker->latitude(-5.5, -4.5),
            'longitude_rumah' => $this->faker->longitude(123.0, 124.0),
            'berat_badan' => $this->faker->randomFloat(1, 30, 80),
            'tinggi_badan' => $this->faker->randomFloat(1, 120, 180),
            'lingkar_kepala' => $this->faker->randomFloat(1, 45, 60),
            'jumlah_saudara_kandung' => $this->faker->numberBetween(0, 5),
        ];
    }
}