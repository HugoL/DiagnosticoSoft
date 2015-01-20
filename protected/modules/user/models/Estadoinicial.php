<?php

/**
 * This is the model class for table "{{estadosiniciales}}".
 *
 * The followings are the available columns in table '{{estadosiniciales}}':
 * @property integer $id
 * @property double $peso_actual
 * @property double $peso_ideal
 * @property string $fecha
 * @property string $observaciones
 * @property integer $id_usuario
 */
class Estadoinicial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estadoinicial the static model class
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
		return '{{estadosiniciales}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peso_actual, peso_ideal, id_usuario', 'required'),
			array('id_usuario', 'numerical', 'integerOnly'=>true),
			array('peso_actual, peso_ideal', 'numerical'),
			array('observaciones', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, peso_actual, peso_ideal, fecha, observaciones, id_usuario', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'peso_actual' => 'Peso Actual',
			'peso_ideal' => 'Peso Ideal',
			'fecha' => 'Fecha',
			'observaciones' => 'Observaciones',
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
		$criteria->compare('peso_actual',$this->peso_actual);
		$criteria->compare('peso_ideal',$this->peso_ideal);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}