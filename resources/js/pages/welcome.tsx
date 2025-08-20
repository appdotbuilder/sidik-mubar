import { type SharedData } from '@/types';
import { Head, Link, usePage } from '@inertiajs/react';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <Head title="SIDIK MUBAR - Sistem Informasi Data Pendidikan Kabupaten Muna Barat">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
            </Head>
            <div className="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-cyan-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
                {/* Navigation */}
                <header className="bg-white/80 backdrop-blur-md border-b border-gray-200/50 dark:bg-gray-900/80 dark:border-gray-700/50">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="flex justify-between items-center py-4">
                            <div className="flex items-center space-x-3">
                                <div className="w-10 h-10 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center">
                                    <span className="text-white font-bold text-lg">S</span>
                                </div>
                                <div>
                                    <h1 className="text-xl font-bold text-gray-900 dark:text-white">SIDIK MUBAR</h1>
                                    <p className="text-xs text-gray-600 dark:text-gray-400">Kab. Muna Barat</p>
                                </div>
                            </div>
                            <nav className="flex items-center space-x-4">
                                {auth.user ? (
                                    <Link
                                        href={route('dashboard')}
                                        className="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition-colors duration-200"
                                    >
                                        Dashboard
                                    </Link>
                                ) : (
                                    <div className="flex items-center space-x-3">
                                        <Link
                                            href={route('login')}
                                            className="text-gray-600 hover:text-gray-900 px-4 py-2 font-medium transition-colors duration-200 dark:text-gray-300 dark:hover:text-white"
                                        >
                                            Masuk
                                        </Link>
                                        <Link
                                            href={route('register')}
                                            className="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition-colors duration-200"
                                        >
                                            Daftar
                                        </Link>
                                    </div>
                                )}
                            </nav>
                        </div>
                    </div>
                </header>

                {/* Hero Section */}
                <main className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div className="text-center mb-16">
                        <h1 className="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                            📚 Sistem Informasi Data Pendidikan
                            <span className="block text-blue-600 dark:text-blue-400 mt-2">
                                Kabupaten Muna Barat
                            </span>
                        </h1>
                        <p className="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto mb-8">
                            Platform komprehensif untuk mengelola data pendidikan di Kabupaten Muna Barat. 
                            Memudahkan pengelolaan informasi sekolah, siswa, guru, dan sarana prasarana pendidikan.
                        </p>
                        <div className="flex flex-col sm:flex-row gap-4 justify-center">
                            <Link
                                href="/cari-sekolah"
                                className="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition-colors duration-200"
                            >
                                🔍 Cari Sekolah
                            </Link>
                            <Link
                                href="/info-publik"
                                className="bg-white hover:bg-gray-50 text-gray-900 px-8 py-3 rounded-lg font-semibold text-lg border border-gray-300 transition-colors duration-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700"
                            >
                                📊 Statistik Pendidikan
                            </Link>
                        </div>
                    </div>

                    {/* Features Grid */}
                    <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                        <div className="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                                <span className="text-2xl">🏫</span>
                            </div>
                            <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                Data Satuan Pendidikan
                            </h3>
                            <p className="text-gray-600 dark:text-gray-300">
                                Kelola informasi lengkap sekolah, NPSN, akreditasi, dan lokasi
                            </p>
                        </div>
                        
                        <div className="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-4">
                                <span className="text-2xl">👨‍🎓</span>
                            </div>
                            <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                Data Peserta Didik
                            </h3>
                            <p className="text-gray-600 dark:text-gray-300">
                                Manajemen data siswa, NISN, dan informasi akademik
                            </p>
                        </div>
                        
                        <div className="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-4">
                                <span className="text-2xl">👨‍🏫</span>
                            </div>
                            <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                Data PTK
                            </h3>
                            <p className="text-gray-600 dark:text-gray-300">
                                Informasi pendidik dan tenaga kependidikan
                            </p>
                        </div>
                        
                        <div className="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
                            <div className="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                                <span className="text-2xl">🏢</span>
                            </div>
                            <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                Sarana Prasarana
                            </h3>
                            <p className="text-gray-600 dark:text-gray-300">
                                Inventarisasi fasilitas dan kondisi bangunan sekolah
                            </p>
                        </div>
                    </div>

                    {/* User Roles */}
                    <div className="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-sm border border-gray-200 dark:border-gray-700 mb-16">
                        <h2 className="text-2xl font-bold text-center text-gray-900 dark:text-white mb-8">
                            🎭 Peran Pengguna
                        </h2>
                        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div className="text-center">
                                <div className="w-16 h-16 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span className="text-3xl">👑</span>
                                </div>
                                <h3 className="font-semibold text-gray-900 dark:text-white mb-2">Admin Dinas</h3>
                                <p className="text-sm text-gray-600 dark:text-gray-300">
                                    Kelola seluruh data pendidikan dan laporan
                                </p>
                            </div>
                            
                            <div className="text-center">
                                <div className="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span className="text-3xl">👨‍🏫</span>
                                </div>
                                <h3 className="font-semibold text-gray-900 dark:text-white mb-2">Guru</h3>
                                <p className="text-sm text-gray-600 dark:text-gray-300">
                                    Akses data siswa dan input nilai
                                </p>
                            </div>
                            
                            <div className="text-center">
                                <div className="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span className="text-3xl">🎓</span>
                                </div>
                                <h3 className="font-semibold text-gray-900 dark:text-white mb-2">Siswa</h3>
                                <p className="text-sm text-gray-600 dark:text-gray-300">
                                    Lihat informasi pribadi dan nilai
                                </p>
                            </div>
                            
                            <div className="text-center">
                                <div className="w-16 h-16 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span className="text-3xl">🏘️</span>
                                </div>
                                <h3 className="font-semibold text-gray-900 dark:text-white mb-2">Masyarakat</h3>
                                <p className="text-sm text-gray-600 dark:text-gray-300">
                                    Akses informasi sekolah dan statistik
                                </p>
                            </div>
                        </div>
                    </div>

                    {/* Call to Action */}
                    <div className="text-center bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-white">
                        <h2 className="text-2xl font-bold mb-4">
                            🚀 Siap Memulai?
                        </h2>
                        <p className="text-blue-100 mb-6 max-w-2xl mx-auto">
                            Bergabunglah dengan sistem informasi pendidikan terdepan untuk Kabupaten Muna Barat. 
                            Daftar sekarang dan mulai kelola data pendidikan dengan mudah.
                        </p>
                        {!auth.user && (
                            <div className="flex flex-col sm:flex-row gap-4 justify-center">
                                <Link
                                    href={route('register')}
                                    className="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold text-lg hover:bg-gray-50 transition-colors duration-200"
                                >
                                    📝 Daftar Sekarang
                                </Link>
                                <Link
                                    href={route('login')}
                                    className="border border-white/30 text-white px-8 py-3 rounded-lg font-semibold text-lg hover:bg-white/10 transition-colors duration-200"
                                >
                                    🔑 Masuk
                                </Link>
                            </div>
                        )}
                    </div>
                </main>

                {/* Footer */}
                <footer className="bg-gray-900 text-white py-8 mt-16">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="text-center">
                            <div className="flex items-center justify-center space-x-3 mb-4">
                                <div className="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <span className="text-white font-bold">S</span>
                                </div>
                                <span className="text-xl font-bold">SIDIK MUBAR</span>
                            </div>
                            <p className="text-gray-400 mb-4">
                                Sistem Informasi Data Pendidikan Kabupaten Muna Barat
                            </p>
                            <p className="text-sm text-gray-500">
                                © 2024 Dinas Pendidikan Kabupaten Muna Barat. All rights reserved.
                            </p>
                        </div>
                    </div>
                </footer>
            </div>
        </>
    );
}