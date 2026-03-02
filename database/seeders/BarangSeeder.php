<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id'=>1,'kategori_id'=>1,'barang_kode'=>'BRG01','barang_nama'=>'Nasi Goreng','harga_beli'=>10000,'harga_jual'=>15000],
            ['barang_id'=>2,'kategori_id'=>1,'barang_kode'=>'BRG02','barang_nama'=>'Mie Goreng','harga_beli'=>8000,'harga_jual'=>12000],
            ['barang_id'=>3,'kategori_id'=>2,'barang_kode'=>'BRG03','barang_nama'=>'Es Teh','harga_beli'=>2000,'harga_jual'=>5000],
            ['barang_id'=>4,'kategori_id'=>2,'barang_kode'=>'BRG04','barang_nama'=>'Jus Alpukat','harga_beli'=>5000,'harga_jual'=>10000],
            ['barang_id'=>5,'kategori_id'=>3,'barang_kode'=>'BRG05','barang_nama'=>'Keripik','harga_beli'=>3000,'harga_jual'=>7000],
            ['barang_id'=>6,'kategori_id'=>3,'barang_kode'=>'BRG06','barang_nama'=>'Coklat','harga_beli'=>4000,'harga_jual'=>9000],
            ['barang_id'=>7,'kategori_id'=>4,'barang_kode'=>'BRG07','barang_nama'=>'Mouse','harga_beli'=>50000,'harga_jual'=>75000],
            ['barang_id'=>8,'kategori_id'=>4,'barang_kode'=>'BRG08','barang_nama'=>'Keyboard','harga_beli'=>70000,'harga_jual'=>100000],
            ['barang_id'=>9,'kategori_id'=>5,'barang_kode'=>'BRG09','barang_nama'=>'Pulpen','harga_beli'=>2000,'harga_jual'=>5000],
            ['barang_id'=>10,'kategori_id'=>5,'barang_kode'=>'BRG10','barang_nama'=>'Buku Tulis','harga_beli'=>3000,'harga_jual'=>7000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
