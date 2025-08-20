<?php

namespace Database\Factories;

use App\Models\SatuanPendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SatuanPendidikan>
 */
class SatuanPendidikanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\SatuanPendidikan>
     */
    protected $model = SatuanPendidikan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bentukPendidikan = $this->faker->randomElement(['TK', 'SD', 'SMP', 'SMA', 'SMK']);
        $statusSekolah = $this->faker->randomElement(['negeri', 'swasta']);
        $kecamatan = $this->faker->randomElement(['Kusambi', 'Lawa', 'Sawerigadi', 'Napabalano', 'Maginti']);
        $npsn = $this->faker->unique()->numerify('########');
        
        return [
            'nama_satuan_pendidikan' => $bentukPendidikan . ($statusSekolah === 'negeri' ? 'N' : 'S') . ' ' . $this->faker->numberBetween(1, 20) . ' ' . $kecamatan,
            'npsn' => $npsn,
            'bentuk_pendidikan' => $bentukPendidikan,
            'status_sekolah' => $statusSekolah,
            'desa_kelurahan' => $this->faker->randomElement([
                'Labuankenanga', 'Wakalambe', 'Lasalepa', 'Wabintingi', 'Lohia',
                'Kusambi', 'Lawa', 'Sawerigadi', 'Napabalano', 'Maginti',
                'Tobimeita', 'Lakudo', 'Wanci', 'Mandati', 'Lohia'
            ]),
            'kecamatan' => $kecamatan,
            'kode_pos' => $this->faker->numerify('#####'),
            'latitude' => $this->faker->latitude(-5.5, -4.5),
            'longitude' => $this->faker->longitude(123.0, 124.0),
            'nama_kepala_sekolah' => $this->faker->name(),
            'nip_kepala_sekolah' => $this->faker->numerify('##################'),
            'hp_kepala_sekolah' => $this->faker->phoneNumber(),
            'periode_data' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'tmt_akreditasi' => $this->faker->optional()->dateTimeBetween('-5 years', 'now'),
            'akreditasi' => $this->faker->optional()->randomElement(['A', 'B', 'C', 'tidak_terakreditasi']),
            'nama_operator' => $this->faker->name(),
            'email_operator' => $this->faker->safeEmail(),
            'hp_operator' => $this->faker->phoneNumber(),
            'sinkron_terakhir' => $this->faker->optional()->dateTimeBetween('-1 month', 'now'),
            'pd_l' => $this->faker->numberBetween(50, 300),
            'pd_p' => $this->faker->numberBetween(50, 300),
            'pd_total' => function (array $attributes) {
                return $attributes['pd_l'] + $attributes['pd_p'];
            },
            'jumlah_rombel' => $this->faker->numberBetween(6, 30),
            'jumlah_guru' => $this->faker->numberBetween(10, 50),
            'jumlah_tendik' => $this->faker->numberBetween(2, 10),
            'jumlah_bendahara_bos' => $this->faker->numberBetween(1, 3),
        ];
    }
}