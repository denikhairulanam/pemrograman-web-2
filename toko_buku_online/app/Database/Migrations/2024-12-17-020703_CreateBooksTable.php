<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constrain'=>11,
                'auto_increment'=>true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constrain' => 150,
            ],
            'pengarang' => [
                'type' => 'VARCHAR',
                'constrain' => 150,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constrain' => 150,
            ],
            'tahun' => [
                'type' => 'INT',
                'constrain' => 5,
            ],
            'cover' => [
                'type' => 'VARCHAR',
                'constrain' => 150,
            ],
            'harga' => [
                'type' => 'INT',
                'constrain' => 16,
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('book');

    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
