<?php

use yii\db\Schema;
use yii\db\Migration;

class m150902_145857_profile extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE galaxysss_4.cap_users ADD name_org VARCHAR(255) NULL;');
    }

    public function down()
    {
        echo "m150902_145857_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
