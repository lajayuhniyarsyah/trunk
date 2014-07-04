<?php

class m140703_111453_create_product extends CDbMigration
{
	private $tblProductName = 'tbl_product';
	private $tblImagesName = 'tbl_product_images';
	public function safeUp()
	{
		$this->createTable(
			$this->tblProductName,
			array(
				'id'=>'pk',
				'name'=>'string',
				'qty'=>'integer',
				'price'=>'numeric',
				'tags'=>'varchar(255)',
			)
		);

		$this->createTable(
			$this->tblImagesName,
			array(
				'id'=>'pk',
				'product_id'=>'integer',
				'name'=>'string',
				'file_name'=>'string',
				'main_image'=>'boolean default false',
			)
		);
		$this->createIndex('image_product',$this->tblImagesName,'product_id');
		$this->addForeignKey('fk_image_product',$this->tblImagesName,'product_id',$this->tblProductName,'id','CASCADE','CASCADE');
	}

	public function down()
	{
		echo "m140703_111453_create_product does not support migration down.\n";
		return false;
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