<?php

/**
 * This is the model class for table "remediales".
 *
 * The followings are the available columns in table 'remediales':
 * @property integer $id_remediales
 * @property string $nombre_remediales
 * @property string $descripcion
 * @property integer $id_evaluaciones
 *
 * The followings are the available model relations:
 * @property Evaluaciones $idEvaluaciones
 * @property RPregunta[] $rPreguntas
 */
class Remediales extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Remediales the static model class
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
		return 'remediales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_remediales, descripcion, id_evaluaciones', 'required'),
			array('id_evaluaciones', 'numerical', 'integerOnly'=>true),
			array('nombre_remediales', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_remediales, nombre_remediales, descripcion, id_evaluaciones', 'safe', 'on'=>'search'),
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
			'idEvaluaciones' => array(self::BELONGS_TO, 'Evaluaciones', 'id_evaluaciones'),
			'rPreguntas' => array(self::HAS_MANY, 'RPregunta', 'id_remediales'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_remediales' => 'Id Remediales',
			'nombre_remediales' => 'Nombre Remediales',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('id_remediales',$this->id_remediales);
		$criteria->compare('nombre_remediales',$this->nombre_remediales,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_evaluaciones',$this->id_evaluaciones);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}