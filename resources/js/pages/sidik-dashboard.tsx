import { Head } from '@inertiajs/react';
import { AppShell } from '@/components/app-shell';

interface DashboardStats {
    totalSekolah: number;
    totalSiswa: number;
    totalGuru: number;
    totalTendik: number;
}

interface StatistikJenjang {
    bentuk_pendidikan: string;
    jumlah: number;
}

interface StatistikKecamatan {
    kecamatan: string;
    jumlah_sekolah: number;
    total_siswa: number;
}

interface SekolahTerbaru {
    id: number;
    nama_satuan_pendidikan: string;
    npsn: string;
    bentuk_pendidikan: string;
    kecamatan: string;
    created_at: string;
}

interface Props {
    stats: DashboardStats;
    statistikJenjang: StatistikJenjang[];
    statistikKecamatan: StatistikKecamatan[];
    sekolahTerbaru: SekolahTerbaru[];
    [key: string]: unknown;
}

export default function SidikDashboard({ stats, statistikJenjang, statistikKecamatan, sekolahTerbaru }: Props) {
    return (
        <AppShell>
            <Head title="Dashboard SIDIK MUBAR" />
            
            <div className="space-y-6">
                {/* Header */}
                <div className="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg p-6 text-white">
                    <h1 className="text-2xl font-bold mb-2">
                        📊 Dashboard SIDIK MUBAR
                    </h1>
                    <p className="text-blue-100">
                        Sistem Informasi Data Pendidikan Kabupaten Muna Barat
                    </p>
                </div>

                {/* Stats Cards */}
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                        <div className="flex items-center">
                            <div className="p-2 bg-blue-100 dark:bg-blue-900 rounded-lg">
                                <span className="text-2xl">🏫</span>
                            </div>
                            <div className="ml-4">
                                <p className="text-sm text-gray-600 dark:text-gray-400">Total Sekolah</p>
                                <p className="text-2xl font-bold text-gray-900 dark:text-white">{stats.totalSekolah.toLocaleString()}</p>
                            </div>
                        </div>
                    </div>

                    <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                        <div className="flex items-center">
                            <div className="p-2 bg-green-100 dark:bg-green-900 rounded-lg">
                                <span className="text-2xl">👨‍🎓</span>
                            </div>
                            <div className="ml-4">
                                <p className="text-sm text-gray-600 dark:text-gray-400">Total Siswa</p>
                                <p className="text-2xl font-bold text-gray-900 dark:text-white">{stats.totalSiswa.toLocaleString()}</p>
                            </div>
                        </div>
                    </div>

                    <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                        <div className="flex items-center">
                            <div className="p-2 bg-purple-100 dark:bg-purple-900 rounded-lg">
                                <span className="text-2xl">👨‍🏫</span>
                            </div>
                            <div className="ml-4">
                                <p className="text-sm text-gray-600 dark:text-gray-400">Total Guru</p>
                                <p className="text-2xl font-bold text-gray-900 dark:text-white">{stats.totalGuru.toLocaleString()}</p>
                            </div>
                        </div>
                    </div>

                    <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                        <div className="flex items-center">
                            <div className="p-2 bg-orange-100 dark:bg-orange-900 rounded-lg">
                                <span className="text-2xl">👥</span>
                            </div>
                            <div className="ml-4">
                                <p className="text-sm text-gray-600 dark:text-gray-400">Total Tendik</p>
                                <p className="text-2xl font-bold text-gray-900 dark:text-white">{stats.totalTendik.toLocaleString()}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    {/* Statistik Jenjang */}
                    <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                        <h2 className="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                            📈 Statistik per Jenjang Pendidikan
                        </h2>
                        <div className="space-y-3">
                            {statistikJenjang.map((item) => (
                                <div key={item.bentuk_pendidikan} className="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <span className="text-gray-900 dark:text-white font-medium">{item.bentuk_pendidikan}</span>
                                    <span className="text-blue-600 dark:text-blue-400 font-semibold">{item.jumlah} sekolah</span>
                                </div>
                            ))}
                        </div>
                    </div>

                    {/* Statistik Kecamatan */}
                    <div className="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                        <h2 className="text-lg font-semibold text-gray-900 dark:text-white mb-4">
                            📍 Top 5 Kecamatan
                        </h2>
                        <div className="space-y-3">
                            {statistikKecamatan.slice(0, 5).map((item) => (
                                <div key={item.kecamatan} className="p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div className="flex justify-between items-center mb-1">
                                        <span className="text-gray-900 dark:text-white font-medium">{item.kecamatan}</span>
                                        <span className="text-sm text-gray-600 dark:text-gray-400">{item.jumlah_sekolah} sekolah</span>
                                    </div>
                                    <div className="text-sm text-blue-600 dark:text-blue-400">
                                        {item.total_siswa.toLocaleString()} siswa
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>

                {/* Recent Schools */}
                <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                    <div className="p-6 border-b border-gray-200 dark:border-gray-700">
                        <h2 className="text-lg font-semibold text-gray-900 dark:text-white">
                            🆕 Sekolah Terbaru Terdaftar
                        </h2>
                    </div>
                    <div className="overflow-x-auto">
                        <table className="w-full">
                            <thead className="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Sekolah
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        NPSN
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Jenjang
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Kecamatan
                                    </th>
                                    <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Terdaftar
                                    </th>
                                </tr>
                            </thead>
                            <tbody className="divide-y divide-gray-200 dark:divide-gray-700">
                                {sekolahTerbaru.map((sekolah) => (
                                    <tr key={sekolah.id} className="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            <div className="text-sm font-medium text-gray-900 dark:text-white">
                                                {sekolah.nama_satuan_pendidikan}
                                            </div>
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">
                                            {sekolah.npsn}
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap">
                                            <span className="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                                {sekolah.bentuk_pendidikan}
                                            </span>
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">
                                            {sekolah.kecamatan}
                                        </td>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">
                                            {new Date(sekolah.created_at).toLocaleDateString('id-ID')}
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </AppShell>
    );
}