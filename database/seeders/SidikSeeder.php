<?php

namespace Database\Seeders;

use App\Models\SatuanPendidikan;
use App\Models\PesertaDidik;
use App\Models\Ptk;
use App\Models\SaranaPrasarana;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SidikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $adminUser = User::create([
            'name' => 'Admin Dinas Pendidikan',
            'email' => 'admin@dinaspendidikan.munbar.go.id',
            'password' => Hash::make('password'),
            'role' => 'admin_dinas',
            'email_verified_at' => now(),
        ]);

        // Create sample schools with relationships
        $schools = SatuanPendidikan::factory(25)->create();
        
        foreach ($schools as $school) {
            // Create students for each school
            $students = PesertaDidik::factory(random_int(50, 200))->create([
                'satuan_pendidikan_id' => $school->id,
            ]);
            
            // Create PTK for each school
            $ptks = Ptk::factory(random_int(10, 30))->create([
                'satuan_pendidikan_id' => $school->id,
            ]);
            
            // Create sarana prasarana for each school
            SaranaPrasarana::factory()->create([
                'satuan_pendidikan_id' => $school->id,
            ]);
            
            // Update school statistics based on actual data
            $school->update([
                'pd_l' => $students->where('jenis_kelamin', 'L')->count(),
                'pd_p' => $students->where('jenis_kelamin', 'P')->count(),
                'pd_total' => $students->count(),
                'jumlah_guru' => $ptks->where('jenis_ptk', 'Guru')->count(),
                'jumlah_tendik' => $ptks->where('jenis_ptk', 'Tendik')->count(),
            ]);
            
            // Create user accounts for some PTKs (teachers)
            $teachers = $ptks->where('jenis_ptk', 'Guru')->take(3);
            foreach ($teachers as $teacher) {
                User::create([
                    'name' => $teacher->nama,
                    'email' => strtolower(str_replace(' ', '.', $teacher->nama)) . '@guru.munbar.sch.id',
                    'password' => Hash::make('password'),
                    'role' => 'guru',
                    'satuan_pendidikan_id' => $school->id,
                    'ptk_id' => $teacher->id,
                    'email_verified_at' => now(),
                ]);
            }
            
            // Create user accounts for some students
            $sampleStudents = $students->take(5);
            foreach ($sampleStudents as $student) {
                User::create([
                    'name' => $student->nama,
                    'email' => strtolower(str_replace(' ', '.', $student->nama)) . '@siswa.munbar.sch.id',
                    'password' => Hash::make('password'),
                    'role' => 'siswa',
                    'satuan_pendidikan_id' => $school->id,
                    'peserta_didik_id' => $student->id,
                    'email_verified_at' => now(),
                ]);
            }
        }
        
        // Create some public users
        User::factory(10)->create([
            'role' => 'masyarakat',
            'email_verified_at' => now(),
        ]);
        
        $this->command->info('SIDIK MUBAR sample data created successfully!');
        $this->command->info('Admin login: admin@dinaspendidikan.munbar.go.id / password');
        $this->command->info('Teacher and student accounts also created with password: password');
    }
}