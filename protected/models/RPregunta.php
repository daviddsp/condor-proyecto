<?php

/**
 * This is the model class for table "r_pregunta".
 *
 * The followings are the available columns in table 'r_pregunta':
 * @property integer $id_rpregunta
 * @property string $pregunta
 * @property integer $id_remediales
 *
 * The followings are the available model relations:
 * @property RRespuesta[] $rRespuestas
 * @property Remediales $idRemediales
 */
class RPregunta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RPregunta the static model class
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
		return 'r_pregunta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pregunta, id_remediales', 'required'),
			array('id_remediales', 'numerical', 'integerOnly'=>true),
			array('pregunta', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_rpregunta, pregunta, id_remediales', 'safe', 'on'=>'search'),
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
			'rRespuestas' => array(self::HAS_MANY, 'RRespuesta', 'id_rpregunta'),
			'idRemediales' => array(self::BELONGS_TO, 'Remediales', 'id_remediales'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_rpregunta' => 'Id Rpregunta',
			'pregunta' => 'Pregunta',
			'id_remediales' => 'Id Remediales',
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

		$criteria->compare('id_rpregunta',$this->id_rpregunta);
		$criteria->compare('pregunta',$this->pregunta,true);
		$criteria->compare('id_remediales',$this->id_remediales);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}