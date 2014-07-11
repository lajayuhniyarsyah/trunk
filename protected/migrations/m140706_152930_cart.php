<?php

class m140706_152930_cart extends CDbMigration
{
	private $cartName = 'tbl_cart';
	private $cartDetailName = 'tbl_cart_detail';
	public function safeUp()
	{
		$this->createTable($this->cartName,array(
			'id'=>'pk',
			'code'=>'varchar(20) not null',
			'user_id'=>'integer not null',
			'sess_id'=>'string not null',
			'type'=>'smallint not null default 1',
			'state'=>'smallint not null default 0',
		));
		$this->createIndex('user_idx',$this->cartName,'user_id');
		$this->createIndex('cart_code',$this->cartName,'code',true);
		$this->addForeignKey('fk_cart_user',$this->cartName,'user_id','tbl_users','id','RESTRICT','RESTRICT');

		$this->createTable($this->cartDetailName,array(
			'id'=>'pk',
			'cart_id'=>'integer not null',
			'product_id'=>'integer',

			'qty'=>'smallint not null',
			'price'=>'numeric',
		));
		$this->createIndex('cart_product',$this->cartDetailName,'product_id');
		$this->createIndex('cart_detail_ref',$this->cartDetailName,'cart_id');
		$this->addForeignKey('fk_cart_product',$this->cartDetailName,'product_id','tbl_product','id','RESTRICT','RESTRICT');
		$this->addForeignKey('fk_cart_detail_ref',$this->cartDetailName,'cart_id',$this->cartName,'id','RESTRICT','RESTRICT');
	}

	public function down()
	{
		echo "m140706_152930_cart does not support migration down.\n";
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