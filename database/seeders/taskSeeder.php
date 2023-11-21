<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('informasi_perusahaans')->insert ([
            ['namaPerusahaan'=>'Clowtie',
            'alamatPerusahaan'=>'Jalan Jambu No. 100A, Medan, Sumatera Utara']
        ]
        );

        \DB::table('informasi_pelanggans')->insert ([
            ['namaPelanggan'=>'Budi Hariady',
            'alamatPelanggan'=>'Jalan Bridjen Zein Hamid No. 40, Medan, Sumatera Utara'],
        ]
        );

        \DB::table('daftar_produks')->insert ([
            ['namaProduk'=>'Kaos Lengan Panjang Warna Hitam',
            'qty'=>5,
            'unitPrice'=>50000,
            'taxes'=>'11%',
            'amount'=>250000],
            ['namaProduk'=>'Kaos Lengan Panjang Warna Putih',
            'qty'=>3,
            'unitPrice'=>50000,
            'taxes'=>'11%',
            'amount'=>150000],
            ['namaProduk'=>'Kaos Lengan Panjang Warna Navy',
            'qty'=>3,
            'unitPrice'=>50000,
            'taxes'=>'11%',
            'amount'=>150000]
        ]
        );
    }
}
