<?php

/**
 * This is the model class for table "{{setting_detail}}".
 *
 * The followings are the available columns in table '{{setting_detail}}':
 * @property integer $id
 * @property integer $setting_id
 * @property string $param
 * @property string $value
 *
 * The followings are the available model relations:
 * @property Setting $setting
 */
class SettingDetail extends CActiveRecord
{
	const CARTMODE_NORMAL="normal";
	const CARTMODE_TRUNK="trunk";
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{setting_detail}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('setting_id', 'required'),
			array('setting_id', 'numerical', 'integerOnly'=>true),
			array('param', 'length', 'max'=>255),
			array('value', 'safe'),
			array('value','valueHandler'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, setting_id, param, value', 'safe', 'on'=>'search'),
		);
	}

	public function valueHandler($attribute,$params)
	{
		$array=false;
		$return=false;


		// check null first
		if(!$this->value){
			$this->addError($attribute,'Value can\'t be blank!');
			$return = false;
		}else{
			$exp = explode('|',$this->value);
			
			if(is_array($exp)){
				$array = true;
				$this->value = $exp;
			}


			if($array){
				// add validation
				var_dump(count($array));
				if(count($array)==0){
					$return =false;
					$this->addError($attribute,'Value can\'t be blank!');
				}elseif(count($array)==1){
					$this->value = $exp[0];
				}
				else{
					$this->value = CJSON::encode($this->value);
					$return =true;
				}
			}else{
				$return = true;
			}
		}

		return $return;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'setting' => array(self::BELONGS_TO, 'Setting', 'setting_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'setting_id' => 'Setting',
			'param' => 'Param',
			'value' => 'Value',
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
		$criteria->compare('setting_id',$this->setting_id);
		$criteria->compare('param',$this->param,true);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SettingDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getCartMode(){
		// CART MODEIS ALWAYS HAVE ID "1"
		return self::findByPk(1);
	}
	

	public function setCartMode($to){
		$mode = self::getCartMode();
		$mode->value = $to;
		$mode->save();
	}
}
