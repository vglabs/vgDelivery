<?php

/**
 * This is the model class for table "tbl_block".
 *
 * The followings are the available columns in table 'tbl_block':
 * @property integer $pk_blockID
 * @property string $blockTitle
 * @property string $blockDescrip
 * @property string $blockFilePath
 * @property string $dte_created
 * @property integer $bln_active
 * @property integer $bln_clientSignOff
 * @property string $dte_signOff
 * @property string $dte_modified
 * @property integer $modifiedUserID
 */
class Block extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Block the static model class
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
		return 'tbl_block';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bln_active, bln_clientSignOff, modifiedUserID', 'numerical', 'integerOnly'=>true),
			array('blockTitle', 'length', 'max'=>255),
			array('blockFilePath', 'length', 'max'=>500),
			array('dte_created, dte_signOff, dte_modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('blockTitle, blockDescrip, blockFilePath, dte_created, bln_active, bln_clientSignOff, dte_signOff, dte_modified, modifiedUserID', 'safe', 'on'=>'search'),
			//identify required fields
			array('blockTitle', 'required'),
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
			'pk_blockID' => 'Pk Block',
			'blockTitle' => 'Block Title',
			'blockDescrip' => 'Block Descrip',
			'blockFilePath' => 'Block File Path',
			'dte_created' => 'Dte Created',
			'bln_active' => 'Bln Active',
			'bln_clientSignOff' => 'Bln Client Sign Off',
			'dte_signOff' => 'Dte Sign Off',
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

		$criteria->compare('pk_blockID',$this->pk_blockID);
		$criteria->compare('blockTitle',$this->blockTitle,true);
		$criteria->compare('blockDescrip',$this->blockDescrip,true);
		$criteria->compare('blockFilePath',$this->blockFilePath,true);
		$criteria->compare('dte_created',$this->dte_created,true);
		$criteria->compare('bln_active',$this->bln_active);
		$criteria->compare('bln_clientSignOff',$this->bln_clientSignOff);
		$criteria->compare('dte_signOff',$this->dte_signOff,true);
		$criteria->compare('dte_modified',$this->dte_modified,true);
		$criteria->compare('modifiedUserID',$this->modifiedUserID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}