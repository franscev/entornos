<?php

namespace Fuel\Migrations;

class Albums
{

    function up()
    {
        \DBUtil::create_table('albums', array(
            'id' => array('type' => 'int', 'constraint' => 20, 'auto_increment'=> true),
            'title' => array('type' => 'varchar', 'constraint' => 100),
            'artist' => array('type' => 'varchar', 'constraint' => 10),
            'description' => array('type' => 'text'),
            'date' => array('type' => 'varchar', 'constraint' => 10),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('albums');
    }
}