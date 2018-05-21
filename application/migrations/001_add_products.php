<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Products extends CI_Migration {

  public function up() {
    $table_name = 'products';
    $fields = [
      'id' => [
        'type' => 'BIGINT',
        'unsigned' => true,
        'auto_increment' => true,
      ],
      /**
       * Custom fields
       */
      'name' => [
        'type' => 'VARCHAR',
        'constraint' => '200',
      ],
      'price' => [
        'type' => 'DECIMAL(10, 2)',
      ],
      /**
       * End custom fields
       */
      'created' => [
        'type' => 'DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
      ],
      'deleted' => [
        'type' => 'TINYINT',
        'default' => 0,
      ]
    ];

    $this->dbforge->add_key('id', true);
    $this->dbforge->add_field($fields);
    $this->dbforge->create_table($table_name, true);
  }

}
