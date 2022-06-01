<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PulsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pulsa::insert([
            [
                'nama' => '10000',
                'harga' => 12000,
            ],
            [
                'nama' => '20000',
                'harga' => 22000,
            ],
            [
                'nama' => '50000',
                'harga' => 52000,
            ],
            [
                'nama' => '100000',
                'harga' => 102000,
            ],
        ]);
    }
}
