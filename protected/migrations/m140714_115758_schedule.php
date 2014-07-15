<?php

class m140714_115758_schedule extends CDbMigration
{
	/*public function up()
	{
	}

	public function down()
	{
		echo "m140714_115758_schedule does not support migration down.\n";
		return false;
	}*/

	
	// Use safeUp/safeDown to do migration with transaction

	// private $schedule = 'tbl_schedule';
	// private $booked_schedule = 'tbl_bookeds_schedule';

	public function safeUp()
	{

		/*$this->createTable($this->schedule,array(
			'id'=>'pk',
			'date_time_start'=>'datetime not null',
		));*/

		/*$this->createTable($this->booked_schedule,array(
			'id'=>'pk',
			'schedule_id'=>'integer not null',
			'cart_id'=>'integer not null',
			'state'=>'smallint not null default 0'
		));

		$this->createIndex('booked_schedule_schedule_idx',$this->booked_schedule,'schedule_id');
		$this->addForeignKey('fk_schedule_booked',$this->booked_schedule,'schedule_id',$this->schedule,'id','CASCADE','CASCADE');

		$this->createIndex('cart_cart_idX',$this->booked_schedule,'cart_id');
		$this->addForeignKey('fk_cart_id',$this->booked_schedule,'cart_id','tbl_cart','id','CASCADE','CASCADE');*/

	}

	public function safeDown()
	{
	}
	
}