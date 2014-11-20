<?php

/**
 * This is the model class for table "{{centros}}".
 *
 * The followings are the available columns in table '{{centros}}':
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $movil
 * @property string $email
 * @property string $mapa
 * @property string $poblacion
 * @property string $codigopostal
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Users $idUsuario
 */
class Centro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{centros}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('id_usuario', 'numerical', 'integerOnly'=>true),
			array('nombre, email, poblacion, codigopostal', 'length', 'max'=>128),
			array('direccion', 'length', 'max'=>256),
			array('telefono, movil', 'length', 'max'=>20),
			array('mapa', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, direccion, telefono, movil, email, mapa, poblacion, codigopostal, id_usuario', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'movil' => 'Movil',
			'email' => 'Email',
			'mapa' => 'Mapa',
			'poblacion' => 'Poblacion',
			'codigopostal' => 'Codigopostal',
			'id_usuario' => 'Id Usuario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('movil',$this->movil,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mapa',$this->mapa,true);
		$criteria->compare('poblacion',$this->poblacion,true);
		$criteria->compare('codigopostal',$this->codigopostal,true);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Centro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
