<?php

namespace Fuel\Migrations;

class Songs
{

    function up()
    {
        \DBUtil::create_table('songs', array(
            'id' => array('type' => 'int', 'constraint' => 20, 'auto_increment'=> true),
            'title' => array('type' => 'varchar', 'constraint' => 60),
            'id_album' => array('type' => 'int', 'constraint' => 20),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('songs');
    }
}