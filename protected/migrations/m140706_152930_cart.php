<?php

class m140706_152930_cart extends CDbMigration
{
	private $cartName = 'tbl_cart';
	private $cartDetailName = 'tbl_cart_detail';
	private $setting = 'tbl_setting';
	private $settingDetail = 'tbl_setting_detail';
	public function safeUp()
	{
		$this->createTable($this->cartName,array(
			'id'=>'pk',
			'code'=>'varchar(20) not null',
			'user_id'=>'integer not null',
			'sess_id'=>'string not null',
			'type'=>'smallint not null default 1',
			'state'=>'smallint not null default 0',
			'pass_scheduled'=>'integer default 0',
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


		$this->createTable($this->setting,array(
			'id'=>'pk',
			'name'=>'string not null',
		));

		$this->createTable($this->settingDetail,array(
			'id'=>'pk',
			'setting_id'=>'integer not null',
			'param'=>'string',
			'value'=>'text',
		));

		$this->createIndex('setting_detail_ref',$this->settingDetail,'setting_id');
		$this->addForeignKey('fk_setting_detail_setting',$this->settingDetail,'setting_id',$this->setting,'id','RESTRICT','RESTRICT');

		// SET DEFAULT CART SETTING
		$this->insert($this->setting,array('id'=>1,'name'=>'cart'));
		$this->insert($this->settingDetail,array('setting_id'=>1,'param'=>'mode','value'=>'normal'));

		// set default schedule setting
		$this->insert($this->setting,array('id'=>2,'name'=>'schedule'));
		$this->insert($this->settingDetail,array('setting_id'=>2,'param'=>'open_start','value'=>"2014-08-01 00:00:00"));
		$this->insert($this->settingDetail,array('setting_id'=>2,'param'=>'open_close','value'=>"2014-09-01 00:00:00"));
		$this->insert($this->settingDetail,array('setting_id'=>2,'param'=>'schedule_time','value'=>"{'1':'09:00-12:00','2':'14:00-17:00','3':'17:00-20:00'}"));


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