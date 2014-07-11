<?php

/**
 * This is the model class for table "{{gallery_detail}}".
 *
 * The followings are the available columns in table '{{gallery_detail}}':
 * @property integer $id
 * @property string $caption
 * @property string $file_name
 * @property string $description
 * @property string $gallery_id
 *
 * The followings are the available model relations:
 * @property Gallery[] $galleries
 */
class GalleryDetail extends CActiveRecord
{
	public $file;
	private $oldData;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gallery_detail}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file_name', 'required'),
			array('caption, file_name', 'length', 'max'=>255),
			array('description', 'safe'),
			array('file','file','types'=>'jpg,jpeg,png,JPEG,JPG,PNG'),
			array('gallery_id','numerical','integerOnly'=>true),
			array('gallery_id','required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, caption, file_name, description', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'Gallery'=>array(self::BELONGS_TO,'Gallery','gallery_id'),
			'galleries' => array(self::HAS_MANY, 'Gallery', 'main_cover'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'caption' => 'Caption',
			'file_name' => 'File Name',
			'description' => 'Description',
			'gallery_id'=>'Gallery'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('file_name',$this->file_name,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GalleryDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}




	public function beforeValidate(){
		if($this->isNewRecord){
			$this->file = CUploadedFile::getInstance($this,'file');
		}
		return true;
	}

	public function afterValidate(){
		if($this->isNewRecord)
			$this->file_name = time().Yii::app()->user->getId().'.'.$this->file->extensionName;
	}


	public function beforeSave()
	{
		if($this->isNewRecord)
			$this->file->saveAs('images/gallery/'.$this->file_name);
		return true;
	}

	public function afterSave(){
		if($this->isNewRecord){
			$this->saveThumb();
		}

		return true;
	}

	public function beforeDelete(){
		$this->oldData = $this;
		return true;
	}

	public function afterDelete(){
		@unlink('images/gallery/'.$this->oldData->file_name);
		@unlink('images/gallery/thumb/'.$this->oldData->file_name);
	}

	public function saveThumb($width=200,$height=200)
	{
		$thumb=Yii::app()->phpThumb->create('images/gallery/'.$this->file_name);
		$thumb->resize($width,$height);
		$thumb->save('images/gallery/thumb/'.$this->file_name);
	}
}
