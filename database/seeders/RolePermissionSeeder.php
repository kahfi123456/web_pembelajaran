<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate(['name'=>'tambah-user']);
        Permission::firstOrCreate(['name'=>'hapus-user']);
        Permission::firstOrCreate(['name'=>'edit-user']);
        Permission::firstOrCreate(['name'=>'lihat-user']);
        Permission::firstOrCreate(['name'=>'download-materi']);
        Permission::firstOrCreate(['name'=>'lihat-materi']);

        Role::firstOrCreate(['name'=>'admin']);
        Role::firstOrCreate(['name'=>'mahasiswa']);
        Role::firstOrCreate(['name'=>'pengunjung']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('lihat-user');

        $roleMahasiswa = Role::findByName('mahasiswa');
        $roleMahasiswa->givePermissionTo('download-materi');
        $roleMahasiswa->givePermissionTo('lihat-materi');

        $rolePengunjung = Role::findByName('pengunjung');
        $rolePengunjung->givePermissionTo('lihat-materi');

    }
}