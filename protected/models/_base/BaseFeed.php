<?php

/**
 * This is the model base class for the table "tbl_feed".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Feed".
 *
 * Columns in table "tbl_feed" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $type
 * @property string $story
 *
 */
abstract class BaseFeed extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_feed';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Feed|Feeds', $n);
	}

	public static function representingColumn() {
		return 'type';
	}

	public function rules() {
		return array(
			array('type', 'length', 'max'=>50),
			array('story', 'safe'),
			array('type, story', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, type, story', 'safe', 'on'=>'search'),
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
			'type' => Yii::t('app', 'Type'),
			'story' => Yii::t('app', 'Story'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('type', $this->type, true);
		$criteria->compare('story', $this->story, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}