<?php

use yii\db\Migration;

/**
 * Class m190930_080107_table_staff
 */
class m190930_080107_table_staff extends Migration{

	public function up(){
		$table_options = NULL;
		if ($this->db->driverName === 'mysql'){
			$table_options = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}
		$this->createTable('{{%staff}}', [
			'id'         => $this->primaryKey(),
			'name'       => $this->string(255)->notNull(),
			'status'     => $this->tinyInteger(3)->notNull()->defaultValue(10),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
			'created_by' => $this->integer(),
			'updated_by' => $this->integer()
		], $table_options);
	}

	public function down(){
		$this->dropTable('{{%staff}}');
	}

}
