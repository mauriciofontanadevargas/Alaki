<?php

/**
 * This is the model base class for the table "tbl_family".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Family".
 *
 * Columns in table "tbl_family" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $name
 * @property string $relationship
 *
 */
abstract class BaseFamily extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_family';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Family|Families', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('id', 'required'),
			array('id', 'length', 'max'=>20),
			array('name', 'length', 'max'=>70),
			array('relationship', 'length', 'max'=>30),
			array('name, relationship', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, relationship', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'relationship' => Yii::t('app', 'Relationship'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('relationship', $this->relationship, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}