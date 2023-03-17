<?php
namespace App\Database\Seeds;
class MahasiswaSeeder extends \Codeigniter\Database\Seeder{
    public function run(){
        $data = [
            [
                'id' => '0',
                'username' => 'admin',
                'password' => '123'
            ],
            [              
                'id' => '1',
                'username' => 'NurF',
                'password' => '123'
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
?>