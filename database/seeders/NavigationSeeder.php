<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navigation;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {

        // Navigasi Admin
        Navigation::create([
            'name' => 'Kelola Permohonan',
            'url' => 'kelola-permohonan',
            'icon' => 'ti-pencil-alt', 
        ]);

        Navigation::create([
            'name' => 'Penjadwalan',
            'url' => 'penjadwalan',
            'icon' => 'ti-calendar',
        ]);

        Navigation::create([
            'name' => 'Kelola Petugas',
            'url' => 'kelola-petugas',
            'icon' => 'ti-user',
        ]);

        Navigation::create([
            'name' => 'Laporan Kunjungan',
            'url' => 'laporan-kunjungan',
            'icon' => 'ti-bar-chart',
        ]);

        Navigation::create([
            'name' => 'Pengaturan Akun',
            'url' => 'pengaturan-akun',
            'icon' => 'ti-settings', 
        ]);

        
        $konfigurasi = Navigation::create([
            'Name' => 'Konfigurasi',
            'url' => 'konfigurasi',
            'icon' => 'ti-panel',
        ]);
        $konfigurasi->subMenus()->create([
            'Name' => 'Roles',
            'url' => 'konfigurasi/roles',
            'icon' => '',
        ]);
        $konfigurasi->subMenus()->create([
            'Name' => 'Permissions',
            'url' => 'konfigurasi/permissions',
            'icon' => '',
            'main_menu' => 1,
        ]);
        
        // Navigasi untuk Instansi
        Navigation::create([
            'name' => 'Permohonan Layanan',
            'url' => 'permohonan-layanan',
            'icon' => 'ti-pencil-alt',
        ]);

        Navigation::create([
            'name' => 'Riwayat Permohonan',
            'url' => 'riwayat-permohonan',
            'icon' => 'ti-clipboard',
        ]);

        Navigation::create([
            'name' => 'Notifikasi',
            'url' => 'notifikasi',
            'icon' => 'ti-bell',
        ]);

        // Navigasi Petugas
        Navigation::create([
            'name' => 'Jadwal Kunjungan',
            'url' => 'jadwal-kunjungan',
            'icon' => 'ti-calendar',
        ]);

        Navigation::create([
            'name' => 'Laporan Kegiatan',
            'url' => 'laporan-kegiatan',
            'icon' => 'ti-write',
        ]);

    }
}
