<?php

/**
 * This is the model class for table "eva_respuesta".
 *
 * The followings are the available columns in table 'eva_respuesta':
 * @property integer $id_respuesta
 * @property string $respuesta
 * @property integer $id_pregunta
 *
 * The followings are the available model relations:
 * @property EvaPregunta $idPregunta
 */
class EvaRespuesta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EvaRespuesta the static model class
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
		return 'eva_respuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('respuesta, id_pregunta', 'required'),
			array('id_pregunta', 'numerical', 'integerOnly'=>true),
			array('respuesta', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_respuesta, respuesta, id_pregunta', 'safe', 'on'=>'search'),
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
			'idPregunta' => array(self::BELONGS_TO, 'EvaPregunta', 'id_pregunta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_respuesta' => 'Id Respuesta',
			'respuesta' => 'Respuesta',
			'id_pregunta' => 'Id Pregunta',
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

		$criteria->compare('id_respuesta',$this->id_respuesta);
		$criteria->compare('respuesta',$this->respuesta,true);
		$criteria->compare('id_pregunta',$this->id_pregunta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}