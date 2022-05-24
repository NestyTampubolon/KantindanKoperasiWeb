<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MakananMinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\MakananMinuman::insert([
            [
                'nama' => 'Pisang Cokelat',
                'harga' => '10000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'pisang_cokelat.png',
            ],
            [
                'nama' => 'Pisang Cokelat Keju',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'pisang_cokelat_keju.png',
            ],
            [
                'nama' => 'Potato Chips',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'potato_chips.png',
            ],
            [
                'nama' => 'Fruit Salad',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'fruit_salad.png',
            ],
            [
                'nama' => 'Burger Telur',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'burger_telur.png',
            ],
            [
                'nama' => 'Kentang Goreng',
                'harga' => '15000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'kentang_goreng.png',
            ],
            [
                'nama' => 'Chicken Popcorn',
                'harga' => '10000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'chicken_popcorn.png',
            ],
            [
                'nama' => 'Fish and Chips',
                'harga' => '18000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'fish_and_chips.png',
            ],
            [
                'nama' => 'Burger Ayam',
                'harga' => '18000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'burger_ayam.png',
            ],
            [
                'nama' => 'Roti Ayam Keju',
                'harga' => '18000',
                'kategori' => 'Snack',
                'stok' => 100,
                'gambar' => 'roti_ayam_keju.png',
            ],
            [
                'nama' => 'Mie Kuah Telur',
                'harga' => '12000',
                'kategori' => 'Mie',
                'stok' => 100,
                'gambar' => 'mie_kuah_telur.png',
            ],
            [
                'nama' => 'Mie Kuah Ayam',
                'harga' => '15000',
                'kategori' => 'Mie',
                'stok' => 100,
                'gambar' => 'mie_kuah_ayam.png',
            ],
            [
                'nama' => 'Mie Goreng Ayam',
                'harga' => '15000',
                'kategori' => 'Mie',
                'stok' => 100,
                'gambar' => 'mie_goreng_ayam.png',
            ],
            [
                'nama' => 'Mie Goreng Telur',
                'harga' => '12000',
                'kategori' => 'Mie',
                'stok' => 100,
                'gambar' => 'mie_goreng_telur.png',
            ],
            [
                'nama' => 'Nasgor Jawa',
                'harga' => '15000',
                'kategori' => 'Makanan',
                'stok' => 100,
                'gambar' => 'nasgor_jawa.png',
            ],
            [
                'nama' => 'Nasgor Special',
                'harga' => '25000',
                'kategori' => 'Makanan',
                'stok' => 100,
                'gambar' => 'nasgor_special.png',
            ],
            [
                'nama' => 'Bolognaise',
                'harga' => '15000',
                'kategori' => 'Spagetti',
                'stok' => 100,
                'gambar' => 'bolognaise.png',
            ],
            [
                'nama' => 'Dimsum Ayam',
                'harga' => '15000',
                'kategori' => 'Dimsum',
                'stok' => 100,
                'gambar' => '.png',
            ],
            [
                'nama' => 'Cah Tauge',
                'harga' => '15000',
                'kategori' => 'Sayuran',
                'stok' => 100,
                'gambar' => 'cah_tauge.png',
            ],
            [
                'nama' => 'Cah Kangkung',
                'harga' => '15000',
                'kategori' => 'Sayuran',
                'stok' => 100,
                'gambar' => 'cah_kangkung.png',
            ],
            [
                'nama' => 'Ayam Bakar',
                'harga' => '45000',
                'kategori' => 'Daging',
                'stok' => 100,
                'gambar' => 'ayam_bakar.png',
            ],
            [
                'nama' => 'Cappucino',
                'harga' => '5000',
                'kategori' => 'Minuman',
                'stok' => 100,
                'gambar' => 'cappucino.png',
            ],
            [
                'nama' => 'Nescafe',
                'harga' => '8000',
                'kategori' => 'Minuman',
                'stok' => 100,
                'gambar' => 'nescafe.png',
            ],
            [
                'nama' => 'Jus Jeruk',
                'harga' => '10000',
                'kategori' => 'Jus',
                'stok' => 100,
                'gambar' => 'jus_jeruk.png',
            ],
            [
                'nama' => 'Jus Melon',
                'harga' => '10000',
                'kategori' => 'Jus',
                'stok' => 100,
                'gambar' => 'jus_melon.png',
            ],
        ]);
    }
}
