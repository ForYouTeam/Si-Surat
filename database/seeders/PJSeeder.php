<?php

namespace Database\Seeders;

use App\Models\PJ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PJSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PJ::create([
            'nama' => 'Nama Kepala Desa',
            'jabatan' => 'Kepala Desa',
            'nip' => '12346573839',
        ]);
    }
}
