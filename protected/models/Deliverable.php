<?php

/**
 * This is the model class for table "tbl_deliverable".
 *
 * The followings are the available columns in table 'tbl_deliverable':
 * @property integer $pk_deliverableID
 * @property integer $fk_deliveryObjectID
 * @property string $dte_created
 * @property string $deliveryNotes
 * @property string $deliveryTitle
 * @property string $dte_modified
 * @property integer $modifiedUserID
 */
class Deliverable extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Deliverable the static model class
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
		return 'tbl_deliverable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_deliveryObjectID, modifiedUserID', 'numerical', 'integerOnly'=>true),
			array('deliveryTitle', 'length', 'max'=>255),
			array('dte_created, deliveryNotes, dte_modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk_deliverableID, fk_deliveryObjectID, dte_created, deliveryNotes, deliveryTitle, dte_modified, modifiedUserID', 'safe', 'on'=>'search'),
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
			'pk_deliverableID' => 'Pk Deliverable',
			'fk_deliveryObjectID' => 'Fk Delivery Object',
			'dte_created' => 'Dte Created',
			'deliveryNotes' => 'Delivery Notes',
			'deliveryTitle' => 'Delivery Title',
			'dte_modified' => 'Dte Modified',
			'modifiedUserID' => 'Modified User',
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

		$criteria->compare('pk_deliverableID',$this->pk_deliverableID);
		$criteria->compare('fk_deliveryObjectID',$this->fk_deliveryObjectID);
		$criteria->compare('dte_created',$this->dte_created,true);
		$criteria->compare('deliveryNotes',$this->deliveryNotes,true);
		$criteria->compare('deliveryTitle',$this->deliveryTitle,true);
		$criteria->compare('dte_modified',$this->dte_modified,true);
		$criteria->compare('modifiedUserID',$this->modifiedUserID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}