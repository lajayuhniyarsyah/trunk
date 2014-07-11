<?php

class m140706_161150_gallery extends CDbMigration
{
	private $gallery='tbl_gallery';
	private $galleryDetail='tbl_gallery_detail';
	public function safeUp()
	{
		$this->createTable($this->gallery,array(
			'id'=>'pk',
			'name'=>'string not null',
			'main_cover'=>'integer',
			'description'=>'text',
		));

		$this->createTable($this->galleryDetail,array(
			'id'=>'pk',
			'gallery_id'=>'integer not null',
			'caption'=>'string',
			'file_name'=>'string not null',
			'description'=>'text',
		));

		$this->createIndex('cover_idx',$this->gallery,'main_cover');
		$this->addForeignKey('fk_cover_gallery',$this->gallery,'main_cover',$this->galleryDetail,'id','SET NULL','CASCADE');

		$this->createIndex('gallery_idx',$this->galleryDetail,'gallery_id');
		$this->addForeignKey('fk_gallery_ref',$this->galleryDetail,'gallery_id',$this->gallery,'id','CASCADE','CASCADE');
	}

	public function down()
	{
		echo "m140706_161150_gallery does not support migration down.\n";
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