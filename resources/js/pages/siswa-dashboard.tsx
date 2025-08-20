import { Head } from '@inertiajs/react';
import { AppShell } from '@/components/app-shell';

export default function SiswaDashboard() {
    return (
        <AppShell>
            <Head title="Dashboard Siswa - SIDIK MUBAR" />
            
            <div className="min-h-screen bg-gray-50 dark:bg-gray-900">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    {/* Header */}
                    <div className="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg p-6 text-white mb-8">
                        <h1 className="text-2xl font-bold mb-2">
                            🎓 Dashboard Siswa
                        </h1>
                        <p className="text-indigo-100">
                            Portal informasi pribadi dan akademik Anda
                        </p>
                    </div>

                    {/* Features Grid */}
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">👤</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Profil Saya
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Lihat dan update informasi data pribadi Anda
                            </p>
                            <button className="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Lihat Profil
                            </button>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">📊</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Nilai Saya
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Lihat nilai dan perkembangan akademik
                            </p>
                            <button className="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Lihat Nilai
                            </button>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">📅</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Jadwal
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Lihat jadwal pelajaran dan kegiatan sekolah
                            </p>
                            <button className="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Lihat Jadwal
                            </button>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">✅</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Kehadiran
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Monitor absensi dan kehadiran Anda
                            </p>
                            <button className="w-full bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Lihat Absensi
                            </button>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">📚</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Materi
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Akses materi pembelajaran dari guru
                            </p>
                            <button className="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Lihat Materi
                            </button>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-teal-100 dark:bg-teal-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">💰</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Info Bantuan
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Informasi bantuan KIP, PIP, dan lainnya
                            </p>
                            <button className="w-full bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Info Bantuan
                            </button>
                        </div>
                    </div>

                    {/* Student Info Summary */}
                    <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-8">
                        <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                            📋 Ringkasan Informasi
                        </h3>
                        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <div className="text-sm text-gray-600 dark:text-gray-400 mb-1">NISN</div>
                                <div className="font-semibold text-gray-900 dark:text-white">-</div>
                            </div>
                            <div>
                                <div className="text-sm text-gray-600 dark:text-gray-400 mb-1">Kelas</div>
                                <div className="font-semibold text-gray-900 dark:text-white">-</div>
                            </div>
                            <div>
                                <div className="text-sm text-gray-600 dark:text-gray-400 mb-1">Sekolah</div>
                                <div className="font-semibold text-gray-900 dark:text-white">-</div>
                            </div>
                        </div>
                    </div>

                    {/* Quick Stats */}
                    <div className="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div className="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg p-6 text-white">
                            <div className="text-center">
                                <div className="text-3xl font-bold">-</div>
                                <div className="text-sm text-blue-100 mt-1">Rata-rata Nilai</div>
                            </div>
                        </div>

                        <div className="bg-gradient-to-r from-green-500 to-green-600 rounded-lg p-6 text-white">
                            <div className="text-center">
                                <div className="text-3xl font-bold">-%</div>
                                <div className="text-sm text-green-100 mt-1">Kehadiran</div>
                            </div>
                        </div>

                        <div className="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg p-6 text-white">
                            <div className="text-center">
                                <div className="text-3xl font-bold">-</div>
                                <div className="text-sm text-purple-100 mt-1">Mata Pelajaran</div>
                            </div>
                        </div>

                        <div className="bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg p-6 text-white">
                            <div className="text-center">
                                <div className="text-3xl font-bold">-</div>
                                <div className="text-sm text-orange-100 mt-1">Ranking</div>
                            </div>
                        </div>
                    </div>

                    {/* Note */}
                    <div className="mt-8 bg-indigo-50 dark:bg-indigo-900/20 border border-indigo-200 dark:border-indigo-800 rounded-lg p-4">
                        <div className="flex">
                            <div className="flex-shrink-0">
                                <span className="text-indigo-400 text-xl">📘</span>
                            </div>
                            <div className="ml-3">
                                <p className="text-sm text-indigo-800 dark:text-indigo-200">
                                    <strong>Selamat belajar!</strong> Portal siswa ini membantu Anda memantau 
                                    perkembangan akademik. Pastikan selalu mengecek informasi terbaru dari sekolah 
                                    dan guru Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AppShell>
    );
}