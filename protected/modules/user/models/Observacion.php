<?php

/**
 * This is the model class for table "{{observaciones}}".
 *
 * The followings are the available columns in table '{{observaciones}}':
 * @property integer $id
 * @property string $motivo
 * @property string $tratamientosAnteriores
 * @property string $variacionesPeso
 * @property double $pesoMax
 * @property double $pesoMin
 * @property double $pesoIdeal
 * @property double $tallaActual
 * @property double $tallaDeseada
 * @property integer $tensionMax
 * @property integer $tensionMin
 * @property string $enfermedades
 * @property string $alergias
 * @property string $terapias
 * @property string $menstruaciones
 * @property integer $embarazos
 * @property integer $partos
 * @property integer $abortos
 * @property string $metodoAnticonceptivo
 * @property string $diuresis
 * @property string $suenyo
 * @property string $ritmoIntestinal
 * @property string $actividadFisica
 * @property string $digestiones
 * @property string $pesadezPiernas
 * @property string $dolor
 * @property integer $calambres
 * @property integer $piesFrios
 * @property integer $manosFrias
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Users $idUsuario
 */
class Observacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{observaciones}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario', 'required'),
			array('tensionMax, tensionMin, embarazos, partos, abortos, id_usuario', 'numerical', 'integerOnly'=>true),
			array('pesoMax, pesoMin, pesoIdeal, tallaActual, tallaDeseada', 'numerical'),
			array('motivo, digestiones', 'length', 'max'=>128),
			array('tratamientosAnteriores, variacionesPeso, enfermedades, alergias, terapias, menstruaciones, metodoAnticonceptivo, diuresis, suenyo, ritmoIntestinal, actividadFisica, pesadezPiernas, dolor, calambres, piesFrios, manosFrias,', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, motivo, tratamientosAnteriores, variacionesPeso, pesoMax, pesoMin, pesoIdeal, tallaActual, tallaDeseada, tensionMax, tensionMin, enfermedades, alergias, terapias, menstruaciones, embarazos, partos, abortos, metodoAnticonceptivo, diuresis, suenyo, ritmoIntestinal, actividadFisica, digestiones, pesadezPiernas, dolor, calambres, piesFrios, manosFrias, id_usuario', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'Users', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'motivo' => 'Motivo',
			'tratamientosAnteriores' => 'Tratamientos Anteriores',
			'variacionesPeso' => 'Variaciones Peso',
			'pesoMax' => 'Peso Max',
			'pesoMin' => 'Peso Min',
			'pesoIdeal' => 'Peso Ideal',
			'tallaActual' => 'Talla Actual',
			'tallaDeseada' => 'Talla Deseada',
			'tensionMax' => 'Tension Max',
			'tensionMin' => 'Tension Min',
			'enfermedades' => 'Enfermedades',
			'alergias' => 'Alergias',
			'terapias' => 'Terapias',
			'menstruaciones' => 'Menstruaciones',
			'embarazos' => 'Embarazos',
			'partos' => 'Partos',
			'abortos' => 'Abortos',
			'metodoAnticonceptivo' => 'Metodo Anticonceptivo',
			'diuresis' => 'Diuresis',
			'suenyo' => 'Suenyo',
			'ritmoIntestinal' => 'Ritmo Intestinal',
			'actividadFisica' => 'Actividad Fisica',
			'digestiones' => 'Digestiones',
			'pesadezPiernas' => 'Pesadez Piernas',
			'dolor' => 'Dolor',
			'calambres' => 'Calambres',
			'piesFrios' => 'Pies Frios',
			'manosFrias' => 'Manos Frias',
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
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('tratamientosAnteriores',$this->tratamientosAnteriores,true);
		$criteria->compare('variacionesPeso',$this->variacionesPeso,true);
		$criteria->compare('pesoMax',$this->pesoMax);
		$criteria->compare('pesoMin',$this->pesoMin);
		$criteria->compare('pesoIdeal',$this->pesoIdeal);
		$criteria->compare('tallaActual',$this->tallaActual);
		$criteria->compare('tallaDeseada',$this->tallaDeseada);
		$criteria->compare('tensionMax',$this->tensionMax);
		$criteria->compare('tensionMin',$this->tensionMin);
		$criteria->compare('enfermedades',$this->enfermedades,true);
		$criteria->compare('alergias',$this->alergias,true);
		$criteria->compare('terapias',$this->terapias,true);
		$criteria->compare('menstruaciones',$this->menstruaciones,true);
		$criteria->compare('embarazos',$this->embarazos);
		$criteria->compare('partos',$this->partos);
		$criteria->compare('abortos',$this->abortos);
		$criteria->compare('metodoAnticonceptivo',$this->metodoAnticonceptivo,true);
		$criteria->compare('diuresis',$this->diuresis,true);
		$criteria->compare('suenyo',$this->suenyo,true);
		$criteria->compare('ritmoIntestinal',$this->ritmoIntestinal,true);
		$criteria->compare('actividadFisica',$this->actividadFisica,true);
		$criteria->compare('digestiones',$this->digestiones,true);
		$criteria->compare('pesadezPiernas',$this->pesadezPiernas,true);
		$criteria->compare('dolor',$this->dolor,true);
		$criteria->compare('calambres',$this->calambres);
		$criteria->compare('piesFrios',$this->piesFrios);
		$criteria->compare('manosFrias',$this->manosFrias);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Observacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
