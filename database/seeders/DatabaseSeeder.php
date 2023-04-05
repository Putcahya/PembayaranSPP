<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin Cahya',
            'email' => 'cahyaadmin@gmail.com',
            'password' =>  Hash::make('Admin Cahya'),
            'level' => 'admin',
            'id_kelas'=>null,
            'id_spp'=>null,
            'alamat'=>'Bantul Yogyakarta',
            'telepon'=>'08884184536',
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Petugas Putra',
        //     'email' => 'petugasputra@gmail.com',
        //     'password' =>  Hash::make('Petugas Putra'),
        //     'level' => 'petugas',
        //     'id_kelas'=>null,
        //     'id_spp'=>null,
        //     'alamat'=>'Bantul Yogyakarta',
        //     'telepon'=>'08884165748',
        // ]);
        // \App\Models\Kelas::create([
        //     'nama_kelas' => '10',
        //     'jurusan' => 'RPL 1',
        // ]);
        // \App\Models\Kelas::create([
        //     'nama_kelas' => '10',
        //     'jurusan' => 'RPL 2',
        // ]);
        // \App\Models\Kelas::create([
        //     'nama_kelas' => '10',
        //     'jurusan' => 'MM 1',
        // ]);
        // \App\Models\Kelas::create([
        //     'nama_kelas' => '10',
        //     'jurusan' => 'MM 2',
        // ]);
        // \App\Models\Spp::create([
        //     'tahun' => '2020',
        //     'nominal' => '1200000',
        // ]);
        // \App\Models\Spp::create([
        //     'tahun' => '2021',
        //     'nominal' => '1400000',
        // ]);
        // \App\Models\Spp::create([
        //     'tahun' => '2022',
        //     'nominal' => '1600000',
        // ]);
        
    }
}
