<?php

/**
 * This is the model class for table "{{tests}}".
 *
 * The followings are the available columns in table '{{tests}}':
 * @property integer $id
 * @property string $pregunta
 * @property string $respuestasanguinea
 * @property string $respuestalinfatica
 * @property string $respuestabiliosa
 * @property string $respuestanerviosa
 * @property string $observaciones
 * @property integer $activado
 */
class Test extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tests}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pregunta, respuestasanguinea, respuestalinfatica, respuestabiliosa, respuestanerviosa, observaciones', 'required'),
			array('activado', 'numerical', 'integerOnly'=>true),
			array('pregunta, respuestasanguinea, respuestalinfatica, respuestabiliosa, respuestanerviosa', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pregunta, respuestasanguinea, respuestalinfatica, respuestabiliosa, respuestanerviosa, observaciones, activado', 'safe', 'on'=>'search'),
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
			'pregunta' => 'Pregunta',
			'respuestasanguinea' => 'Respuestasanguinea',
			'respuestalinfatica' => 'Respuestalinfatica',
			'respuestabiliosa' => 'Respuestabiliosa',
			'respuestanerviosa' => 'Respuestanerviosa',
			'observaciones' => 'Observaciones',
			'activado' => 'Activado',
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
		$criteria->compare('pregunta',$this->pregunta,true);
		$criteria->compare('respuestasanguinea',$this->respuestasanguinea,true);
		$criteria->compare('respuestalinfatica',$this->respuestalinfatica,true);
		$criteria->compare('respuestabiliosa',$this->respuestabiliosa,true);
		$criteria->compare('respuestanerviosa',$this->respuestanerviosa,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('activado',$this->activado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Test the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
