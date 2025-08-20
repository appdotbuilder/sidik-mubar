import { Head } from '@inertiajs/react';

interface PublicStats {
    totalSekolah: number;
    totalSiswa: number;
    totalGuru: number;
}

interface SekolahByKecamatan {
    kecamatan: string;
    jumlah: number;
}

interface JenjangPendidikan {
    bentuk_pendidikan: string;
    jumlah: number;
}

interface Props {
    publicStats: PublicStats;
    sekolahByKecamatan: SekolahByKecamatan[];
    jenjangPendidikan: JenjangPendidikan[];
    [key: string]: unknown;
}

export default function PublicInfo({ publicStats, sekolahByKecamatan, jenjangPendidikan }: Props) {
    return (
        <>
            <Head title="Statistik Pendidikan - SIDIK MUBAR" />
            
            <div className="min-h-screen bg-gray-50 dark:bg-gray-900">
                {/* Header */}
                <div className="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                        <div className="flex items-center justify-between">
                            <div className="flex items-center space-x-3">
                                <div className="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <span className="text-white font-bold text-lg">S</span>
                                </div>
                                <div>
                                    <h1 className="text-2xl font-bold text-gray-900 dark:text-white">📊 Statistik Pendidikan</h1>
                                    <p className="text-gray-600 dark:text-gray-400">Kabupaten Muna Barat</p>
                                </div>
                            </div>
                            <a
                                href="/"
                                className="text-blue-600 hover:text-blue-800 font-medium dark:text-blue-400 dark:hover:text-blue-300"
                            >
                                ← Kembali ke Beranda
                            </a>
                        </div>
                    </div>
                </div>

                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    {/* Overview Stats */}
                    <div className="mb-8">
                        <h2 className="text-xl font-bold text-gray-900 dark:text-white mb-6">
                            📈 Ringkasan Pendidikan
                        </h2>
                        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div className="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg p-6 text-white">
                                <div className="flex items-center">
                                    <div className="p-3 bg-white/20 rounded-lg">
                                        <span className="text-3xl">🏫</span>
                                    </div>
                                    <div className="ml-4">
                                        <p className="text-blue-100">Total Sekolah</p>
                                        <p className="text-3xl font-bold">{publicStats.totalSekolah.toLocaleString()}</p>
                                    </div>
                                </div>
                            </div>

                            <div className="bg-gradient-to-r from-green-500 to-green-600 rounded-lg p-6 text-white">
                                <div className="flex items-center">
                                    <div className="p-3 bg-white/20 rounded-lg">
                                        <span className="text-3xl">👨‍🎓</span>
                                    </div>
                                    <div className="ml-4">
                                        <p className="text-green-100">Total Siswa</p>
                                        <p className="text-3xl font-bold">{publicStats.totalSiswa.toLocaleString()}</p>
                                    </div>
                                </div>
                            </div>

                            <div className="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg p-6 text-white">
                                <div className="flex items-center">
                                    <div className="p-3 bg-white/20 rounded-lg">
                                        <span className="text-3xl">👨‍🏫</span>
                                    </div>
                                    <div className="ml-4">
                                        <p className="text-purple-100">Total Guru</p>
                                        <p className="text-3xl font-bold">{publicStats.totalGuru.toLocaleString()}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        {/* Statistik per Kecamatan */}
                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-6">
                                📍 Sebaran Sekolah per Kecamatan
                            </h3>
                            <div className="space-y-4">
                                {sekolahByKecamatan.map((item, index) => {
                                    const percentage = (item.jumlah / publicStats.totalSekolah) * 100;
                                    return (
                                        <div key={item.kecamatan}>
                                            <div className="flex justify-between items-center mb-2">
                                                <span className="text-sm font-medium text-gray-900 dark:text-white">
                                                    {item.kecamatan}
                                                </span>
                                                <span className="text-sm text-gray-600 dark:text-gray-400">
                                                    {item.jumlah} sekolah ({percentage.toFixed(1)}%)
                                                </span>
                                            </div>
                                            <div className="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-700">
                                                <div
                                                    className={`h-2 rounded-full bg-gradient-to-r ${
                                                        index % 5 === 0 ? 'from-blue-400 to-blue-500' :
                                                        index % 5 === 1 ? 'from-green-400 to-green-500' :
                                                        index % 5 === 2 ? 'from-purple-400 to-purple-500' :
                                                        index % 5 === 3 ? 'from-yellow-400 to-yellow-500' :
                                                        'from-pink-400 to-pink-500'
                                                    }`}
                                                    style={{ width: `${percentage}%` }}
                                                ></div>
                                            </div>
                                        </div>
                                    );
                                })}
                            </div>
                        </div>

                        {/* Statistik per Jenjang */}
                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                            <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-6">
                                🎓 Sebaran per Jenjang Pendidikan
                            </h3>
                            <div className="space-y-4">
                                {jenjangPendidikan.map((item, index) => {
                                    const percentage = (item.jumlah / publicStats.totalSekolah) * 100;
                                    return (
                                        <div key={item.bentuk_pendidikan} className="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <div className="flex items-center">
                                                <div className={`w-4 h-4 rounded-full mr-3 ${
                                                    index % 5 === 0 ? 'bg-blue-500' :
                                                    index % 5 === 1 ? 'bg-green-500' :
                                                    index % 5 === 2 ? 'bg-purple-500' :
                                                    index % 5 === 3 ? 'bg-yellow-500' :
                                                    'bg-pink-500'
                                                }`}></div>
                                                <span className="text-gray-900 dark:text-white font-medium">
                                                    {item.bentuk_pendidikan}
                                                </span>
                                            </div>
                                            <div className="text-right">
                                                <div className="text-lg font-bold text-gray-900 dark:text-white">
                                                    {item.jumlah}
                                                </div>
                                                <div className="text-sm text-gray-600 dark:text-gray-400">
                                                    {percentage.toFixed(1)}%
                                                </div>
                                            </div>
                                        </div>
                                    );
                                })}
                            </div>
                        </div>
                    </div>

                    {/* Additional Info */}
                    <div className="mt-8 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg p-8 text-white">
                        <div className="text-center">
                            <h3 className="text-2xl font-bold mb-4">
                                💡 Ingin Tahu Lebih Lanjut?
                            </h3>
                            <p className="text-indigo-100 mb-6 max-w-2xl mx-auto">
                                Jelajahi informasi lengkap tentang sekolah-sekolah di Kabupaten Muna Barat. 
                                Temukan sekolah yang sesuai dengan kebutuhan Anda.
                            </p>
                            <div className="flex flex-col sm:flex-row gap-4 justify-center">
                                <a
                                    href="/cari-sekolah"
                                    className="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors duration-200"
                                >
                                    🔍 Cari Sekolah
                                </a>
                                <a
                                    href="/"
                                    className="border border-white/30 text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/10 transition-colors duration-200"
                                >
                                    🏠 Kembali ke Beranda
                                </a>
                            </div>
                        </div>
                    </div>

                    {/* Data Note */}
                    <div className="mt-8 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4">
                        <div className="flex">
                            <div className="flex-shrink-0">
                                <span className="text-yellow-400 text-xl">ℹ️</span>
                            </div>
                            <div className="ml-3">
                                <p className="text-sm text-yellow-800 dark:text-yellow-200">
                                    <strong>Catatan:</strong> Data statistik ini diperbarui secara berkala berdasarkan informasi terbaru dari 
                                    Dinas Pendidikan Kabupaten Muna Barat. Untuk informasi lebih detail atau pertanyaan khusus, 
                                    silakan hubungi Dinas Pendidikan setempat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}