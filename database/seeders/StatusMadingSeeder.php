<?php

namespace Database\Seeders;

use App\Models\StatusMading;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusMadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama' => 'Aktif',
                'slug' => 'aktif',
                'pesan' => 'Poster ditampilkan pada halaman Beranda.'
            ],
            [
                'nama' => 'Nonaktif',
                'slug' => 'nonaktif',
                'pesan' => 'Poster tidak ditampilkan pada halaman Beranda.'
            ]
        ];

        foreach ($datas as $data) {
            StatusMading::firstOrCreate($data);
        }
    }
}
