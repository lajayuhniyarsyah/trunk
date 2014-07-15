<?php

/**
 * This is the model class for table "{{cart}}".
 *
 * The followings are the available columns in table '{{cart}}':
 * @property integer $id
 * @property string $code
 * @property integer $user_id
 * @property string $sess_id
 * @property integer $type
 * @property integer $state
 * @property integer $pass_scheduled
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property CartDetail[] $cartDetails
 */
class Cart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{cart}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, user_id, sess_id', 'required'),
			array('user_id, type, state, pass_scheduled', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>20),
			array('sess_id', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, code, user_id, sess_id, type, state, pass_scheduled', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'cartDetails' => array(self::HAS_MANY, 'CartDetail', 'cart_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'user_id' => 'User',
			'sess_id' => 'Sess',
			'type' => 'Type',
			'state' => 'State',
			'pass_scheduled' => 'Pass Scheduled',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('sess_id',$this->sess_id,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('state',$this->state);
		$criteria->compare('pass_scheduled',$this->pass_scheduled);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
