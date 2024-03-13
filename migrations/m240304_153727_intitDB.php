<?php

use yii\db\Migration;

/**
 * Class m240304_153727_intitDB
 */
class m240304_153727_intitDB extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this ->createTable("users", [
            "id"=> $this->primaryKey(),
            "email" =>$this->string(100)->notNull(),
            "password" =>$this->string(150)->notNull(),
            "name" =>$this->string(50)->notNull(),
            "is_admin" =>$this->boolean()->defaultValue(false)->notNull(),
        ]);

        $this->insert("users", [
            "email" => "admin@admin.admin",
            "password" => password_hash("admin", PASSWORD_DEFAULT),
            "name" => "admin",
            "is_admin" => true
        ]);

    }

    public function safeDown()
    {
        $this ->dropTable("users");
    }




    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240304_153727_intitDB cannot be reverted.\n";

        return false;
    }
    */
}
