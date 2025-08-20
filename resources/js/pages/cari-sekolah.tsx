import React, { useState } from 'react';
import { Head, router } from '@inertiajs/react';

interface Sekolah {
    id: number;
    nama_satuan_pendidikan: string;
    npsn: string;
    bentuk_pendidikan: string;
    status_sekolah: string;
    desa_kelurahan: string;
    kecamatan: string;
    nama_kepala_sekolah: string;
    hp_kepala_sekolah: string;
    pd_total: number;
    jumlah_guru: number;
}

interface SekolahData {
    data: Sekolah[];
    current_page: number;
    last_page: number;
    per_page: number;
    total: number;
}

interface Filters {
    nama?: string;
    kecamatan?: string;
    bentuk_pendidikan?: string;
}

interface Props {
    sekolah: SekolahData;
    filters: Filters;
    [key: string]: unknown;
}

export default function CariSekolah({ sekolah, filters }: Props) {
    const [searchForm, setSearchForm] = useState({
        nama: filters.nama || '',
        kecamatan: filters.kecamatan || '',
        bentuk_pendidikan: filters.bentuk_pendidikan || '',
    });

    const handleSearch = (e: React.FormEvent) => {
        e.preventDefault();
        router.get('/cari-sekolah', searchForm, {
            preserveState: true,
        });
    };

    const handleReset = () => {
        setSearchForm({
            nama: '',
            kecamatan: '',
            bentuk_pendidikan: '',
        });
        router.get('/cari-sekolah');
    };

    return (
        <>
            <Head title="Cari Sekolah - SIDIK MUBAR" />
            
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
                                    <h1 className="text-2xl font-bold text-gray-900 dark:text-white">Cari Sekolah</h1>
                                    <p className="text-gray-600 dark:text-gray-400">Temukan informasi sekolah di Kabupaten Muna Barat</p>
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
                    {/* Search Form */}
                    <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-8">
                        <form onSubmit={handleSearch} className="space-y-4 md:space-y-0 md:flex md:space-x-4">
                            <div className="flex-1">
                                <label htmlFor="nama" className="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Nama Sekolah
                                </label>
                                <input
                                    type="text"
                                    id="nama"
                                    value={searchForm.nama}
                                    onChange={(e) => setSearchForm({ ...searchForm, nama: e.target.value })}
                                    placeholder="Masukkan nama sekolah..."
                                    className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                />
                            </div>
                            <div className="flex-1">
                                <label htmlFor="kecamatan" className="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Kecamatan
                                </label>
                                <select
                                    id="kecamatan"
                                    value={searchForm.kecamatan}
                                    onChange={(e) => setSearchForm({ ...searchForm, kecamatan: e.target.value })}
                                    className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                >
                                    <option value="">Semua Kecamatan</option>
                                    <option value="Kusambi">Kusambi</option>
                                    <option value="Lawa">Lawa</option>
                                    <option value="Sawerigadi">Sawerigadi</option>
                                    <option value="Napabalano">Napabalano</option>
                                    <option value="Maginti">Maginti</option>
                                </select>
                            </div>
                            <div className="flex-1">
                                <label htmlFor="bentuk_pendidikan" className="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                    Jenjang Pendidikan
                                </label>
                                <select
                                    id="bentuk_pendidikan"
                                    value={searchForm.bentuk_pendidikan}
                                    onChange={(e) => setSearchForm({ ...searchForm, bentuk_pendidikan: e.target.value })}
                                    className="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                >
                                    <option value="">Semua Jenjang</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                </select>
                            </div>
                            <div className="flex space-x-3">
                                <button
                                    type="submit"
                                    className="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-medium transition-colors duration-200"
                                >
                                    🔍 Cari
                                </button>
                                <button
                                    type="button"
                                    onClick={handleReset}
                                    className="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-md font-medium transition-colors duration-200"
                                >
                                    Reset
                                </button>
                            </div>
                        </form>
                    </div>

                    {/* Results */}
                    {sekolah && sekolah.data && sekolah.data.length > 0 ? (
                        <>
                            {/* Results Header */}
                            <div className="mb-6">
                                <p className="text-gray-600 dark:text-gray-400">
                                    Menampilkan {sekolah.data.length} dari {sekolah.total} sekolah
                                </p>
                            </div>

                            {/* School Cards */}
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                {sekolah.data.map((item) => (
                                    <div key={item.id} className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 hover:shadow-md transition-shadow duration-200">
                                        <div className="flex items-start justify-between mb-4">
                                            <div className="flex-1">
                                                <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-1">
                                                    {item.nama_satuan_pendidikan}
                                                </h3>
                                                <p className="text-sm text-blue-600 dark:text-blue-400">
                                                    NPSN: {item.npsn}
                                                </p>
                                            </div>
                                            <span className={`px-2 py-1 text-xs font-semibold rounded-full ${
                                                item.status_sekolah === 'negeri' 
                                                    ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200'
                                                    : 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200'
                                            }`}>
                                                {item.status_sekolah}
                                            </span>
                                        </div>
                                        
                                        <div className="space-y-3">
                                            <div className="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                                <span className="w-5">🏫</span>
                                                <span className="font-medium mr-2">Jenjang:</span>
                                                <span>{item.bentuk_pendidikan}</span>
                                            </div>
                                            
                                            <div className="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                                <span className="w-5">📍</span>
                                                <span className="font-medium mr-2">Lokasi:</span>
                                                <span>{item.desa_kelurahan}, {item.kecamatan}</span>
                                            </div>
                                            
                                            <div className="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                                <span className="w-5">👨‍🎓</span>
                                                <span className="font-medium mr-2">Siswa:</span>
                                                <span>{item.pd_total} orang</span>
                                            </div>
                                            
                                            <div className="flex items-center text-sm text-gray-600 dark:text-gray-400">
                                                <span className="w-5">👨‍🏫</span>
                                                <span className="font-medium mr-2">Guru:</span>
                                                <span>{item.jumlah_guru} orang</span>
                                            </div>
                                            
                                            <div className="border-t border-gray-200 dark:border-gray-700 pt-3">
                                                <div className="text-sm text-gray-600 dark:text-gray-400">
                                                    <span className="font-medium">Kepala Sekolah:</span>
                                                    <div className="mt-1">{item.nama_kepala_sekolah}</div>
                                                    <div className="text-xs text-blue-600 dark:text-blue-400">
                                                        📱 {item.hp_kepala_sekolah}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ))}
                            </div>

                            {/* Pagination */}
                            {sekolah.last_page > 1 && (
                                <div className="mt-8 flex justify-center">
                                    <div className="flex space-x-2">
                                        {Array.from({ length: sekolah.last_page }, (_, i) => i + 1).map((page) => (
                                            <button
                                                key={page}
                                                onClick={() => router.get('/cari-sekolah', { ...searchForm, page })}
                                                className={`px-4 py-2 rounded-md font-medium transition-colors duration-200 ${
                                                    page === sekolah.current_page
                                                        ? 'bg-blue-600 text-white'
                                                        : 'bg-gray-200 text-gray-700 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600'
                                                }`}
                                            >
                                                {page}
                                            </button>
                                        ))}
                                    </div>
                                </div>
                            )}
                        </>
                    ) : (
                        <div className="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-12 text-center">
                            <div className="text-6xl mb-4">🔍</div>
                            <h3 className="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                Tidak ada sekolah ditemukan
                            </h3>
                            <p className="text-gray-600 dark:text-gray-400">
                                Coba ubah kriteria pencarian untuk menemukan sekolah yang Anda cari.
                            </p>
                        </div>
                    )}
                </div>
            </div>
        </>
    );
}