import { Head } from '@inertiajs/react';
import { AppShell } from '@/components/app-shell';

export default function GuruDashboard() {
    return (
        <AppShell>
            <Head title="Dashboard Guru - SIDIK MUBAR" />
            
            <div className="min-h-screen bg-gray-50 dark:bg-gray-900">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    {/* Header */}
                    <div className="bg-gradient-to-r from-green-600 to-emerald-600 rounded-lg p-6 text-white mb-8">
                        <h1 className="text-2xl font-bold mb-2">
                            👨‍🏫 Dashboard Guru
                        </h1>
                        <p className="text-green-100">
                            Selamat datang di sistem informasi pendidikan SIDIK MUBAR
                        </p>
                    </div>

                    {/* Features Grid */}
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">👨‍🎓</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Data Siswa
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Lihat dan kelola informasi siswa yang Anda ajarkan
                            </p>
                            <button className="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Akses Data Siswa
                            </button>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">📝</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Input Nilai
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Input dan update nilai siswa secara online
                            </p>
                            <button className="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Input Nilai
                            </button>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <div className="flex items-center mb-4">
                                <div className="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                                    <span className="text-2xl">✅</span>
                                </div>
                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white ml-3">
                                    Absensi
                                </h3>
                            </div>
                            <p className="text-gray-600 dark:text-gray-300 mb-4">
                                Catat kehadiran siswa secara digital
                            </p>
                            <button className="w-full bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                                Catat Absensi
                            </button>
                        </div>
                    </div>

                    {/* Quick Stats */}
                    <div className="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="text-center">
                                <div className="text-3xl font-bold text-blue-600 dark:text-blue-400">-</div>
                                <div className="text-sm text-gray-600 dark:text-gray-400 mt-1">Total Siswa</div>
                            </div>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="text-center">
                                <div className="text-3xl font-bold text-green-600 dark:text-green-400">-</div>
                                <div className="text-sm text-gray-600 dark:text-gray-400 mt-1">Mata Pelajaran</div>
                            </div>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="text-center">
                                <div className="text-3xl font-bold text-purple-600 dark:text-purple-400">-</div>
                                <div className="text-sm text-gray-600 dark:text-gray-400 mt-1">Kelas Diampu</div>
                            </div>
                        </div>

                        <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="text-center">
                                <div className="text-3xl font-bold text-orange-600 dark:text-orange-400">-</div>
                                <div className="text-sm text-gray-600 dark:text-gray-400 mt-1">Tugas Pending</div>
                            </div>
                        </div>
                    </div>

                    {/* Note */}
                    <div className="mt-8 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
                        <div className="flex">
                            <div className="flex-shrink-0">
                                <span className="text-blue-400 text-xl">💡</span>
                            </div>
                            <div className="ml-3">
                                <p className="text-sm text-blue-800 dark:text-blue-200">
                                    <strong>Fitur dalam pengembangan:</strong> Sistem manajemen guru sedang dalam tahap pengembangan. 
                                    Fitur lengkap akan tersedia segera untuk membantu aktivitas mengajar Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AppShell>
    );
}