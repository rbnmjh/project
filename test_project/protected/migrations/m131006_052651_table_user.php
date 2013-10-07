<?php

class m131006_052651_table_user extends CDbMigration
{
	public function up()
	{
		$this->createTable('user', array(
            'id' => 'pk',
            'name' => 'VARCHAR(255) NOT NULL',
            'password' => 'VARCHAR(255) NOT NULL',
            'address' => 'VARCHAR(255) NOT NULL',
            'email' => 'VARCHAR(255) NOT NULL',
            'picture' => 'VARCHAR(255) NOT NULL',
            'status' => 'ENUM("0","1") NOT NULL',
        ),'ENGINE=InnoDB');


	}

	public function down()
	{
		$this->DropTable('user');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}