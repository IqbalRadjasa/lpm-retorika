<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama' => 'Isu Kampus',
                'jenis' => 'artikel',
                'slug' => 'isu-kampus'
            ],
            [
                'nama' => 'Nasional',
                'jenis' => 'artikel',
                'slug' => 'nasional'
            ],
            [
                'nama' => 'Opini',
                'jenis' => 'artikel',
                'slug' => 'opini'
            ],
            [
                'nama' => 'Podcast',
                'jenis' => 'lainnya',
                'slug' => 'podcast'
            ],
            [
                'nama' => 'Mading',
                'jenis' => 'lainnya',
                'slug' => 'mading'
            ],
            [
                'nama' => 'Majalah',
                'jenis' => 'publikasi',
                'slug' => 'majalah'
            ],
            [
                'nama' => 'Tabloid',
                'jenis' => 'publikasi',
                'slug' => 'tabloid'
            ],
            [
                'nama' => 'Buletin',
                'jenis' => 'publikasi',
                'slug' => 'buletin'
            ],
        ];

        foreach ($datas as $data) {
            Kategori::firstOrCreate($data);
        }
    }
}
