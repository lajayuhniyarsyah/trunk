<?php

class m140803_121237_pages extends CDbMigration
{
	/*public function up()
	{
	}

	public function down()
	{
		echo "m140803_121237_pages does not support migration down.\n";
		return false;
	}*/

	public $pages = 'tbl_pages';
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable($this->pages,array(
			'id'=>'pk',
			'title'=>'string not null',
			'content'=>'text not null',
			'tags'=>'text default null',
		));
		$this->createIndex('page_title_idx',$this->pages,'title',true);
	}

	public function safeDown()
	{

	}
}