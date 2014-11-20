<?php

/**
 * This is the model class for table "{{tratamientos}}".
 *
 * The followings are the available columns in table '{{tratamientos}}':
 * @property integer $id
 * @property string $tratamiento
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $fecha_creacion
 * @property string $descripcion
 * @property integer $finalizado
 * @property double $precio
 * @property integer $sesiones
 * @property string $observaciones
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Users $idUsuario
 */
class Tratamiento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tratamiento the static model class
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
		return '{{tratamientos}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tratamiento, id_usuario', 'required'),
			array('finalizado, sesiones, id_usuario', 'numerical', 'integerOnly'=>true),
			array('precio', 'numerical'),
			array('tratamiento', 'length', 'max'=>256),
			array('fecha_inicio, fecha_fin, descripcion, observaciones', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tratamiento, fecha_inicio, fecha_fin, fecha_creacion, descripcion, finalizado, precio, sesiones, observaciones, id_usuario', 'safe', 'on'=>'search'),
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
			'tratamiento' => 'Tratamiento',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'fecha_creacion' => 'Fecha Creacion',
			'descripcion' => 'Descripcion',
			'finalizado' => 'Finalizado',
			'precio' => 'Precio',
			'sesiones' => 'Sesiones',
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
		$criteria->compare('tratamiento',$this->tratamiento,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('finalizado',$this->finalizado);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('sesiones',$this->sesiones);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}