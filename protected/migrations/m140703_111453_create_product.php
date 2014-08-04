<?php

class m140703_111453_create_product extends CDbMigration
{
	private $tblProductName = 'tbl_product';
	private $tblImagesName = 'tbl_product_images';
	private $tblProductList = 'tbl_product_list';
	public function safeUp()
	{
		$this->createTable(
			$this->tblProductName,
			array(
				'id'=>'pk',
				'name'=>'string',
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
				'main_image'=>'integer default 0',
			)
		);
		$this->createIndex('image_product',$this->tblImagesName,'product_id');
		$this->addForeignKey('fk_image_product',$this->tblImagesName,'product_id',$this->tblProductName,'id','CASCADE','CASCADE');



		$this->createTable(
			$this->tblProductList,
			array(
				'id'=>'pk',
				'product_id'=>'integer not null',
				'size'=>'varchar(3) not null',
				'stock'=>'integer default 0',
			)
		);
		$this->createIndex('product_list_idx',$this->tblProductList,'product_id');
		$this->addForeignKey('fk_product_list_ref',$this->tblProductList,'product_id',$this->tblProductName,'id','CASCADE','CASCADE');
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