<?php

/**
 * This is the model class for table "movimientos".
 *
 * The followings are the available columns in table 'movimientos':
 * @property string $fecha
 * @property string $hora
 * @property string $proceso
 * @property string $accion
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Usuarios $idUsuario
 */
class Movimientos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Movimientos the static model class
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
		return 'movimientos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, id_usuario', 'required'),
			array('id_usuario', 'numerical', 'integerOnly'=>true),
			array('proceso, accion', 'length', 'max'=>100),
			array('hora', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fecha, hora, proceso, accion, id_usuario', 'safe', 'on'=>'search'),
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
			'idUsuario' => array(self::BELONGS_TO, 'Usuarios', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'proceso' => 'Proceso',
			'accion' => 'Accion',
			'id_usuario' => 'Id Usuario',
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

		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('proceso',$this->proceso,true);
		$criteria->compare('accion',$this->accion,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}