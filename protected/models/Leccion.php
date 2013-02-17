<?php

/**
 * This is the model class for table "leccion".
 *
 * The followings are the available columns in table 'leccion':
 * @property integer $id_leccion
 * @property string $nombre_leccion
 * @property string $descripcion
 * @property string $leccion
 * @property integer $id_tema
 *
 * The followings are the available model relations:
 * @property Temas $idTema
 * @property Ejercicios[] $ejercicioses
 * @property Ejercicios[] $ejercicioses1
 * @property FuentesBibliograficas[] $fuentesBibliograficases
 * @property FuentesBibliograficas[] $fuentesBibliograficases1
 * @property Ejemplos[] $ejemploses
 * @property Ejemplos[] $ejemploses1
 * @property Contenido[] $contenidos
 * @property Contenido[] $contenidos1
 */
class Leccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Leccion the static model class
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
		return 'leccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_leccion, descripcion, leccion, id_tema', 'required'),
			array('id_tema', 'numerical', 'integerOnly'=>true),
			array('nombre_leccion', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>200),
			array('leccion', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_leccion, nombre_leccion, descripcion, leccion, id_tema', 'safe', 'on'=>'search'),
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
			'idTema' => array(self::BELONGS_TO, 'Temas', 'id_tema'),
			'ejercicioses' => array(self::HAS_MANY, 'Ejercicios', 'id_leccion'),
			'ejercicioses1' => array(self::HAS_MANY, 'Ejercicios', 'nombre_leccion'),
			'fuentesBibliograficases' => array(self::HAS_MANY, 'FuentesBibliograficas', 'id_leccion'),
			'fuentesBibliograficases1' => array(self::HAS_MANY, 'FuentesBibliograficas', 'nombre_leccion'),
			'ejemploses' => array(self::HAS_MANY, 'Ejemplos', 'id_leccion'),
			'ejemploses1' => array(self::HAS_MANY, 'Ejemplos', 'nombre_leccion'),
			'contenidos' => array(self::HAS_MANY, 'Contenido', 'id_leccion'),
			'contenidos1' => array(self::HAS_MANY, 'Contenido', 'nombre_leccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_leccion' => 'Id Leccion',
			'nombre_leccion' => 'Nombre Leccion',
			'descripcion' => 'Descripcion',
			'leccion' => 'Leccion',
			'id_tema' => 'Id Tema',
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

		$criteria->compare('id_leccion',$this->id_leccion);
		$criteria->compare('nombre_leccion',$this->nombre_leccion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('leccion',$this->leccion,true);
		$criteria->compare('id_tema',$this->id_tema);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}