<?php

use yii\db\Migration;

/**
 * Class m240304_155938_fixDB08
 */
class m240304_155938_fixDB08 extends Migration
{

    public function safeUp()
    {
        $this->addColumn(
            'users',
            'age',
            $this->integer()
        );
    }


    public function safeDown()
    {
        echo "m240304_155938_fixDB08 cannot be reverted.\n";

        return true;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240304_155938_fixDB08 cannot be reverted.\n";

        return false;
    }
    */
}
