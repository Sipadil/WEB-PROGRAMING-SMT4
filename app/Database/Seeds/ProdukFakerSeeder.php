<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
use CodeIgniter\I18n\Time;
class ProdukFakerSeeder extends Seeder
{
    public function run()
    {
        {
            $faker = \Faker\Factory::create('id_ID');
    
            for ($i = 0; $i < 40; $i++) {
                $data = [
                    'nama' => $faker->name(),
                    'harga' => $faker->numberBetween(1000, 100000),
                    'stok' => $faker->numberBetween(1, 100),
                    'created_at' => Time::now(),
                    'updated_at' => Time::now(),
                ];
    
                $this->db->table('produk')->insert($data);
            }
        }
    }
}
