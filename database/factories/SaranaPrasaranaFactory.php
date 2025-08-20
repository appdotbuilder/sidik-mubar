<?php

namespace Database\Factories;

use App\Models\SaranaPrasarana;
use App\Models\SatuanPendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SaranaPrasarana>
 */
class SaranaPrasaranaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\App\Models\SaranaPrasarana>
     */
    protected $model = SaranaPrasarana::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Helper function to generate condition data
        $generateConditionData = function ($maxTotal = 10) {
            $total = $this->faker->numberBetween(0, $maxTotal);
            $baik = $this->faker->numberBetween(0, $total);
            $remaining = $total - $baik;
            
            $rusakRingan = $this->faker->numberBetween(0, $remaining);
            $remaining -= $rusakRingan;
            
            $rusakSedang = $this->faker->numberBetween(0, $remaining);
            $remaining -= $rusakSedang;
            
            $rusakBerat = $this->faker->numberBetween(0, $remaining);
            $rusakTotal = $remaining - $rusakBerat;
            
            return [
                'baik' => $baik,
                'rusak_ringan' => $rusakRingan,
                'rusak_sedang' => $rusakSedang,
                'rusak_berat' => $rusakBerat,
                'rusak_total' => $rusakTotal,
            ];
        };
        
        return [
            'satuan_pendidikan_id' => SatuanPendidikan::factory(),
            'ruang_kelas' => $generateConditionData(20),
            'ruang_perpustakaan' => $generateConditionData(2),
            'lab_komputer' => $generateConditionData(3),
            'lab_bahasa' => $generateConditionData(2),
            'lab_ipa' => $generateConditionData(2),
            'lab_fisika' => $generateConditionData(1),
            'lab_biologi' => $generateConditionData(1),
            'ruang_kepala_sekolah' => $generateConditionData(1),
            'ruang_guru' => $generateConditionData(3),
            'ruang_tata_usaha' => $generateConditionData(2),
            'wc_guru_laki' => $generateConditionData(5),
            'wc_guru_perempuan' => $generateConditionData(5),
            'wc_siswa_laki' => $generateConditionData(10),
            'wc_siswa_perempuan' => $generateConditionData(10),
            'meja_siswa' => $generateConditionData(200),
            'kursi_siswa' => $generateConditionData(200),
            'papan_tulis' => $generateConditionData(20),
            'komputer' => $generateConditionData(50),
        ];
    }
}