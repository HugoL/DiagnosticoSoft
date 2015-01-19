<?php

/**
 * This is the model class for table "{{silhowell}}".
 *
 * The followings are the available columns in table '{{silhowell}}':
 * @property integer $id
 * @property integer $total_fit
 * @property integer $total_comfort
 * @property integer $actual_fit
 * @property integer $actual_comfort
 * @property string $fecha
 * @property string $ultimavez
 * @property string $texto
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Users $idUsuario
 */
class Silhowell extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Silhowell the static model class
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
		return '{{silhowell}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total_fit, total_comfort, fecha, id_usuario', 'required'),
			array('total_fit, total_comfort, actual_fit, actual_comfort, id_usuario', 'numerical', 'integerOnly'=>true),
			array('ultimavez, texto', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, total_fit, total_comfort, actual_fit, actual_comfort, fecha, ultimavez, texto, id_usuario', 'safe', 'on'=>'search'),
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
			'idUsuario' => array(self::BELONGS_TO, 'Users', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'total_fit' => 'Total Fit',
			'total_comfort' => 'Total Comfort',
			'actual_fit' => 'Actual Fit',
			'actual_comfort' => 'Actual Comfort',
			'fecha' => 'Fecha',
			'ultimavez' => 'Ultimavez',
			'texto' => 'Texto',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('total_fit',$this->total_fit);
		$criteria->compare('total_comfort',$this->total_comfort);
		$criteria->compare('actual_fit',$this->actual_fit);
		$criteria->compare('actual_comfort',$this->actual_comfort);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('ultimavez',$this->ultimavez,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}