<?php

use yii\db\Schema;

class m160804_160101_history extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('history', [
            'id' => Schema::TYPE_PK,
            'user' => Schema::TYPE_STRING . '(10) NOT NULL',
            'message' => Schema::TYPE_TEXT . ' NOT NULL',
            'tanggal' => Schema::TYPE_TIMESTAMP,
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('history');
    }
}
