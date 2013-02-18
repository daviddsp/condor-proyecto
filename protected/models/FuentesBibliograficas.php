<?php

/**
 * This is the model class for table "fuentes_bibliograficas".
 *
 * The followings are the available columns in table 'fuentes_bibliograficas':
 * @property integer $id_fuentes_bibliograficas
 * @property string $nombre_fuente_bibliograficas
 * @property string $fuente_bibliografica
 * @property integer $id_leccion
 *
 * The followings are the available model relations:
 * @property Leccion $idLeccion
 */
class FuentesBibliograficas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FuentesBibliograficas the static model class
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
		return 'fuentes_bibliograficas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_fuente_bibliograficas, fuente_bibliografica, id_leccion', 'required'),
			array('id_leccion', 'numerical', 'integerOnly'=>true),
			array('nombre_fuente_bibliograficas', 'length', 'max'=>50),
			array('fuente_bibliografica', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_fuentes_bibliograficas, nombre_fuente_bibliograficas, fuente_bibliografica, id_leccion', 'safe', 'on'=>'search'),
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
			'idLeccion' => array(self::BELONGS_TO, 'Leccion', 'id_leccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fuentes_bibliograficas' => 'Id Fuentes Bibliograficas',
			'nombre_fuente_bibliograficas' => 'Nombre Fuente Bibliograficas',
			'fuente_bibliografica' => 'Fuente Bibliografica',
			'id_leccion' => 'Id Leccion',
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

		$criteria->compare('id_fuentes_bibliograficas',$this->id_fuentes_bibliograficas);
		$criteria->compare('nombre_fuente_bibliograficas',$this->nombre_fuente_bibliograficas,true);
		$criteria->compare('fuente_bibliografica',$this->fuente_bibliografica,true);
		$criteria->compare('id_leccion',$this->id_leccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}