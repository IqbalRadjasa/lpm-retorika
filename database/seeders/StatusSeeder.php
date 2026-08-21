<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama' => 'Simpan sebagai Draft',
                'slug' => 'draft',
                'pesan' => 'Konten disimpan dan belum ditampilkan kepada pembaca.'
            ],
            [
                'nama' => 'Terbitkan Sekarang',
                'slug' => 'published',
                'pesan' => 'Konten langsung dapat dibaca oleh pengunjung website.'
            ]
        ];

        foreach ($datas as $data) {
            Status::firstOrCreate($data);
        }
    }
}
