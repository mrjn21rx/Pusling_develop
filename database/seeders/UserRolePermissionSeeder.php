<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Pastikan User diimpor
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data default untuk user
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];

        // Mulai transaksi database
        DB::beginTransaction();

        try {
            // Buat data user
            $instansi = User::create(array_merge([
                'email' => 'instansi@gmail.com',
                'name' => 'instansi',
            ], $default_user_value));

            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ], $default_user_value));

            $petugas = User::create(array_merge([
                'email' => 'petugas@gmail.com',
                'name' => 'petugas',
            ], $default_user_value));

            // Buat roles
            $role_instansi = Role::create(['name' => 'instansi']);
            $role_admin = Role::create(['name' => 'admin']);
            $role_petugas = Role::create(['name' => 'petugas']);

            // Buat permissions konfigurasi
            Permission::create(['name' => 'read konfigurasi/roles']);
            Permission::create(['name' => 'create konfigurasi/roles']);
            Permission::create(['name' => 'update konfigurasi/roles']);
            Permission::create(['name' => 'delete konfigurasi/roles']);
            Permission::create(['name' => 'read konfigurasi/permissions']);
            Permission::create(['name' => 'read konfigurasi']);

            //Permissions Menu Admin
            Permission::create(['name' => 'read kelola-permohonan']);
            Permission::create(['name' => 'read penjadwalan']);
            Permission::create(['name' => 'read kelola-petugas']);
            Permission::create(['name' => 'read laporan-kunjungan']);
            Permission::create(['name' => 'read pengaturan-akun']);

            //Permissions Menu Instansi
            Permission::create(['name' => 'read permohonan-layanan']);
            Permission::create(['name' => 'read riwayat-permohonan']);
            Permission::create(['name' => 'read notifikasi']);

            //Permissions Menu Petugas
            Permission::create(['name' => 'read jadwal-kunjungan']);
            Permission::create(['name' => 'read laporan-kegiatan']);

            // Memberikan permissions ke role admin
            $role_admin->givePermissionTo([
                'read konfigurasi/permissions',
                'read konfigurasi/roles',
                'create konfigurasi/roles',
                'update konfigurasi/roles',
                'delete konfigurasi/roles',
                'read konfigurasi',
                'read kelola-permohonan',
                'read penjadwalan',
                'read kelola-petugas',
                'read laporan-kunjungan',
                'read pengaturan-akun',
            ]);

            // Memberikan permissions ke role instansi
            $role_instansi->givePermissionTo([
                'read permohonan-layanan',
                'read riwayat-permohonan',
                'read notifikasi',
            ]);

            
            // Memberikan permissions ke role petugas
            $role_petugas->givePermissionTo([
                'read jadwal-kunjungan',
                'read laporan-kegiatan',
            ]);

            // Tetapkan role ke user
            $instansi->assignRole('instansi');
            $admin->assignRole('admin');
            $petugas->assignRole('petugas');

            // Commit transaksi
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack(); // Batalkan transaksi jika error
            throw $th;
        }
    }
}
