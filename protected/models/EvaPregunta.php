<?php

/**
 * This is the model class for table "eva_pregunta".
 *
 * The followings are the available columns in table 'eva_pregunta':
 * @property integer $id_pregunta
 * @property string $pregunta
 * @property integer $id_evaluaciones
 *
 * The followings are the available model relations:
 * @property EvaRespuesta[] $evaRespuestas
 * @property EvaRespuesta[] $evaRespuestas1
 * @property Evaluaciones $idEvaluaciones
 */
class EvaPregunta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EvaPregunta the static model class
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
		return 'eva_pregunta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pregunta, id_evaluaciones', 'required'),
			array('id_evaluaciones', 'numerical', 'integerOnly'=>true),
			array('pregunta', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pregunta, pregunta, id_evaluaciones', 'safe', 'on'=>'search'),
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
			'evaRespuestas' => array(self::HAS_MANY, 'EvaRespuesta', 'id_pregunta'),
			'evaRespuestas1' => array(self::HAS_MANY, 'EvaRespuesta', 'pregunta'),
			'idEvaluaciones' => array(self::BELONGS_TO, 'Evaluaciones', 'id_evaluaciones'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pregunta' => 'Id Pregunta',
			'pregunta' => 'Pregunta',
			'id_evaluaciones' => 'Id Evaluaciones',
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

		$criteria->compare('id_pregunta',$this->id_pregunta);
		$criteria->compare('pregunta',$this->pregunta,true);
		$criteria->compare('id_evaluaciones',$this->id_evaluaciones);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}