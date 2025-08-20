<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SatuanPendidikan;
use App\Models\PesertaDidik;
use App\Models\Ptk;
use App\Models\SaranaPrasarana;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SidikController extends Controller
{
    /**
     * Display the SIDIK MUBAR dashboard.
     */
    public function index()
    {
        // Get statistics for dashboard
        $totalSekolah = SatuanPendidikan::count();
        $totalSiswa = PesertaDidik::count();
        $totalGuru = Ptk::where('jenis_ptk', 'Guru')->count();
        $totalTendik = Ptk::where('jenis_ptk', 'Tendik')->count();
        
        // Statistics by education level
        $statistikJenjang = SatuanPendidikan::selectRaw('bentuk_pendidikan, count(*) as jumlah')
            ->groupBy('bentuk_pendidikan')
            ->get();
            
        // Statistics by district
        $statistikKecamatan = SatuanPendidikan::selectRaw('kecamatan, count(*) as jumlah_sekolah, sum(pd_total) as total_siswa')
            ->groupBy('kecamatan')
            ->get();
            
        // Recent schools
        $sekolahTerbaru = SatuanPendidikan::latest()
            ->limit(5)
            ->get(['id', 'nama_satuan_pendidikan', 'npsn', 'bentuk_pendidikan', 'kecamatan', 'created_at']);
            
        return Inertia::render('sidik-dashboard', [
            'stats' => [
                'totalSekolah' => $totalSekolah,
                'totalSiswa' => $totalSiswa,
                'totalGuru' => $totalGuru,
                'totalTendik' => $totalTendik,
            ],
            'statistikJenjang' => $statistikJenjang,
            'statistikKecamatan' => $statistikKecamatan,
            'sekolahTerbaru' => $sekolahTerbaru,
        ]);
    }

    /**
     * Display public information for masyarakat.
     */
    public function show()
    {
        // Public statistics
        $publicStats = [
            'totalSekolah' => SatuanPendidikan::count(),
            'totalSiswa' => PesertaDidik::count(),
            'totalGuru' => Ptk::where('jenis_ptk', 'Guru')->count(),
        ];
        
        // Schools by district for public view
        $sekolahByKecamatan = SatuanPendidikan::selectRaw('kecamatan, count(*) as jumlah')
            ->groupBy('kecamatan')
            ->get();
            
        // Education levels
        $jenjangPendidikan = SatuanPendidikan::selectRaw('bentuk_pendidikan, count(*) as jumlah')
            ->groupBy('bentuk_pendidikan')
            ->get();
        
        return Inertia::render('public-info', [
            'publicStats' => $publicStats,
            'sekolahByKecamatan' => $sekolahByKecamatan,
            'jenjangPendidikan' => $jenjangPendidikan,
        ]);
    }

    /**
     * Search schools for public.
     */
    public function create(Request $request)
    {
        $query = SatuanPendidikan::query();
        
        if ($request->filled('nama')) {
            $query->where('nama_satuan_pendidikan', 'like', '%' . $request->nama . '%');
        }
        
        if ($request->filled('kecamatan')) {
            $query->where('kecamatan', $request->kecamatan);
        }
        
        if ($request->filled('bentuk_pendidikan')) {
            $query->where('bentuk_pendidikan', $request->bentuk_pendidikan);
        }
        
        $sekolah = $query->select([
            'id',
            'nama_satuan_pendidikan',
            'npsn',
            'bentuk_pendidikan',
            'status_sekolah',
            'desa_kelurahan',
            'kecamatan',
            'nama_kepala_sekolah',
            'hp_kepala_sekolah',
            'pd_total',
            'jumlah_guru',
        ])->paginate(10);
        
        return Inertia::render('cari-sekolah', [
            'sekolah' => $sekolah,
            'filters' => $request->all(),
        ]);
    }
}