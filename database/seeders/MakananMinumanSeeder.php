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
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Pisang Cokelat Keju',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Potato Chips',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Fruit Salad',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Burger Telur',
                'harga' => '12000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Kentang Goreng',
                'harga' => '15000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Chicken Popcorn',
                'harga' => '10000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Fish and Chips',
                'harga' => '18000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Burger Ayam',
                'harga' => '18000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Roti Ayam Keju',
                'harga' => '18000',
                'kategori' => 'Snack',
                'stok' => 20,
                'gambar' => 'snack.png',
            ],
            [
                'nama' => 'Mie Kuah Telur',
                'harga' => '12000',
                'kategori' => 'Mie',
                'stok' => 20,
                'gambar' => 'mie.png',
            ],
            [
                'nama' => 'Mie Kuah Ayam',
                'harga' => '15000',
                'kategori' => 'Mie',
                'stok' => 20,
                'gambar' => 'mie.png',
            ],
            [
                'nama' => 'Mie Goreng Ayam',
                'harga' => '15000',
                'kategori' => 'Mie',
                'stok' => 20,
                'gambar' => 'mie.png',
            ],
            [
                'nama' => 'Mie Goreng Telur',
                'harga' => '12000',
                'kategori' => 'Mie',
                'stok' => 20,
                'gambar' => 'mie.png',
            ],
            [
                'nama' => 'Nasgor Jawa',
                'harga' => '15000',
                'kategori' => 'Makanan',
                'stok' => 20,
                'gambar' => 'food.png',
            ],
            [
                'nama' => 'Nasgor Special',
                'harga' => '25000',
                'kategori' => 'Makanan',
                'stok' => 20,
                'gambar' => 'food.png',
            ],
            [
                'nama' => 'Bolognaise',
                'harga' => '15000',
                'kategori' => 'Spagetti',
                'stok' => 20,
                'gambar' => 'spaguetti.png',
            ],
            [
                'nama' => 'Dimsum Ayam',
                'harga' => '15000',
                'kategori' => 'Dimsum',
                'stok' => 20,
                'gambar' => 'dimsum.png',
            ],
            [
                'nama' => 'Cah Tauge',
                'harga' => '15000',
                'kategori' => 'Sayuran',
                'stok' => 20,
                'gambar' => 'vegetables.png',
            ],
            [
                'nama' => 'Cah Kangkung',
                'harga' => '15000',
                'kategori' => 'Sayuran',
                'stok' => 20,
                'gambar' => 'vegetables.png',
            ],
            [
                'nama' => 'Ayam Bakar',
                'harga' => '45000',
                'kategori' => 'Daging',
                'stok' => 20,
                'gambar' => 'meat.png',
            ],
            [
                'nama' => 'Cappucino',
                'harga' => '5000',
                'kategori' => 'Minuman',
                'stok' => 20,
                'gambar' => 'drink.png',
            ],
            [
                'nama' => 'Nescafe',
                'harga' => '8000',
                'kategori' => 'Minuman',
                'stok' => 20,
                'gambar' => 'drink.png',
            ],
            [
                'nama' => 'Jus Jeruk',
                'harga' => '10000',
                'kategori' => 'Jus',
                'stok' => 20,
                'gambar' => 'juice.png',
            ],
            [
                'nama' => 'Jus Melon',
                'harga' => '10000',
                'kategori' => 'Jus',
                'stok' => 20,
                'gambar' => 'juice.png',
            ],
        ]);
    }
}
