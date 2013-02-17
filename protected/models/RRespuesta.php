<?php

/**
 * This is the model class for table "r_respuesta".
 *
 * The followings are the available columns in table 'r_respuesta':
 * @property integer $id_rrespuesta
 * @property string $respuesta
 * @property integer $id_rpregunta
 *
 * The followings are the available model relations:
 * @property RPregunta $idRpregunta
 */
class RRespuesta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RRespuesta the static model class
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
		return 'r_respuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('respuesta, id_rpregunta', 'required'),
			array('id_rpregunta', 'numerical', 'integerOnly'=>true),
			array('respuesta', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_rrespuesta, respuesta, id_rpregunta', 'safe', 'on'=>'search'),
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
			'idRpregunta' => array(self::BELONGS_TO, 'RPregunta', 'id_rpregunta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rrespuesta' => 'Id Rrespuesta',
			'respuesta' => 'Respuesta',
			'id_rpregunta' => 'Id Rpregunta',
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

		$criteria->compare('id_rrespuesta',$this->id_rrespuesta);
		$criteria->compare('respuesta',$this->respuesta,true);
		$criteria->compare('id_rpregunta',$this->id_rpregunta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}