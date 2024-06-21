<?php

namespace Database\Seeders;

use App\Models\customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        customer::create([
            'customer_ID'=>'2017.01.024',
            'nama'=>'Abdul Mutolib',
            'type'=>'Siswa',
            'jenjang'=>'SMPT',
            'tingkatan'=>'IX',
            'kelas'=>'A',
            'saldo'=>'0',
            'alamat'=>'Jl. Hj japat Rt:02 Rw:01 No. 35, Sukmajaya Depok   Jawa Barat  Indonesia',
            'kota'=>'0',
            'kode_pos'=>'0',
            'negara'=>'Indonesia',
            'kontak'=>'Abul Hasyimi/Masroh',
            'telephone'=>'0878-7856-5691',
        ]);
    }
}
