<?php

use App\Http\Controllers\SidikController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/health-check', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toISOString(),
    ]);
})->name('health-check');

// Public routes
Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// Public SIDIK routes for masyarakat
Route::get('/info-publik', [SidikController::class, 'show'])->name('public-info');
Route::get('/cari-sekolah', [SidikController::class, 'create'])->name('search-schools');

// Protected routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard based on user role
    Route::get('/dashboard', function () {
        $user = auth()->user();
        
        if ($user->isAdminDinas()) {
            return redirect()->route('sidik.dashboard');
        } elseif ($user->isGuru()) {
            return Inertia::render('guru-dashboard');
        } elseif ($user->isSiswa()) {
            return Inertia::render('siswa-dashboard');
        } else {
            return Inertia::render('dashboard');
        }
    })->name('dashboard');
    
    // SIDIK Dashboard for admin and staff
    Route::get('/sidik', [SidikController::class, 'index'])->name('sidik.dashboard');
    
    // Additional admin routes would go here
    // Route::resource('satuan-pendidikan', SatuanPendidikanController::class);
    // Route::resource('peserta-didik', PesertaDidikController::class);
    // Route::resource('ptk', PtkController::class);
    // Route::resource('sarana-prasarana', SaranaPrasaranaController::class);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';