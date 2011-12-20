<?php

/**
 * This is the model class for table "tbl_client".
 *
 * The followings are the available columns in table 'tbl_client':
 * @property integer $pk_clientID
 * @property string $clientName
 * @property string $dte_created
 * @property integer $bln_active
 */
class Client extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bln_active', 'numerical', 'integerOnly'=>true),
			array('clientName', 'length', 'max'=>255),
			array('dte_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('clientName, bln_active', 'safe', 'on'=>'search'),
			//declare those fields that are required
			array('clientName','required'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk_clientID' => 'Pk Client',
			'clientName' => 'Client Name',
			'dte_created' => 'Dte Created',
			'bln_active' => 'Bln Active',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pk_clientID',$this->pk_clientID);
		$criteria->compare('clientName',$this->clientName,true);
		$criteria->compare('dte_created',$this->dte_created,true);
		$criteria->compare('bln_active',$this->bln_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}