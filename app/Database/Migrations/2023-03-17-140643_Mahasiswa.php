<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'auti_increment' => TRUE
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('mahasiswa');
    }
    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
