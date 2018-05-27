<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_sample extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('trouble', [
            'id' => $this->primaryKey(),
            'troublecode' => $this->string(200)->notNull(),
			'description' => $this->text()->notNull(),
            'picture' => $this->text(),
        ], $tableOptions);

      

    }

    public function down()
    {
        $this->dropForeignKey('fk_sample_data_sample_id-1','sample_data');
        $this->dropIndex('idx_sample_data_sample_id-1','sample_data');
        $this->dropTable('{{%sample_data}}');
        $this->dropTable('{{%samples}}');
    }
}
