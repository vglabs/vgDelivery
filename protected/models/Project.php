<?php

/**
 * This is the model class for table "tbl_project".
 *
 * The followings are the available columns in table 'tbl_project':
 * @property integer $pk_projectID
 * @property string $proj_name
 * @property integer $fk_clientID
 * @property string $dte_created
 * @property string $dte_started
 * @property integer $fk_salesPersonID
 * @property integer $fk_pmPersonID
 * @property string $proj_number
 * @property string $dte_modified
 * @property integer $modifiedUserID
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Project the static model class
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
		return 'tbl_project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_clientID, fk_salesPersonID, fk_pmPersonID, modifiedUserID', 'numerical', 'integerOnly'=>true),
			array('proj_name', 'length', 'max'=>300),
			array('proj_number', 'length', 'max'=>255),
			array('dte_created, dte_started, dte_modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proj_name, fk_clientID, dte_created, dte_started, fk_salesPersonID, fk_pmPersonID, proj_number, dte_modified, modifiedUserID', 'safe', 'on'=>'search'),
			array('proj_name, proj_number', 'required'),
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
			'pk_projectID' => 'Pk Project',
			'proj_name' => 'Proj Name',
			'fk_clientID' => 'Fk Client',
			'dte_created' => 'Dte Created',
			'dte_started' => 'Dte Started',
			'fk_salesPersonID' => 'Fk Sales Person',
			'fk_pmPersonID' => 'Fk Pm Person',
			'proj_number' => 'Proj Number',
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

		$criteria->compare('pk_projectID',$this->pk_projectID);
		$criteria->compare('proj_name',$this->proj_name,true);
		$criteria->compare('fk_clientID',$this->fk_clientID);
		$criteria->compare('dte_created',$this->dte_created,true);
		$criteria->compare('dte_started',$this->dte_started,true);
		$criteria->compare('fk_salesPersonID',$this->fk_salesPersonID);
		$criteria->compare('fk_pmPersonID',$this->fk_pmPersonID);
		$criteria->compare('proj_number',$this->proj_number,true);
		$criteria->compare('dte_modified',$this->dte_modified,true);
		$criteria->compare('modifiedUserID',$this->modifiedUserID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}