<?php

class SilhowellController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','ver','calcular','index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	
	public function actionCalcular( $peso_actual, $peso_ideal, $id_usuario ){
		$model = new Silhowell;

		///////FÓRMULA PARA CALCULAR SESIONES SILHOWELL: //////////
		/** 
		sobrepeso = peso - pesoIdeal 
		y = sobrepeso / 3; (con decimales)
		sesionesFit = y * 6;
		sesionesComfort = y * 4;
		*/
		///////////////////////////////////////////////////////////

		$sobrepeso = $peso_actual - $peso_ideal;
		if( $sobrepeso > 0 ){
			$y = $sobrepeso / 3;
			$model->total_fit = round($y * 6);
			$model->total_comfort = round($y * 4);
		}else{
			$model->total_fit = 0;
			$model->total_comfort = 0;
		}
		$model->id_usuario = $id_usuario;

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate( $peso_actual = 0, $peso_ideal = 0, $id_usuario )
	{

		$model = new Silhowell;
		$model->id_usuario = $id_usuario;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Silhowell']))
		{
			$model->attributes=$_POST['Silhowell'];
			if( strcmp($model->ultimavez,'') == 0 )
				$model->ultimavez = NULL;
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}else{
			$sobrepeso = $peso_actual - $peso_ideal;
			if( $sobrepeso > 0 ){
				$y = $sobrepeso / 3;
				$model->total_fit = round($y * 6);
				$model->total_comfort = round($y * 4);
			}else{
				$model->total_fit = 0;
				$model->total_comfort = 0;
			}
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Silhowell']))
		{
			$model->attributes=$_POST['Silhowell'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Silhowell');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionVer( $id )
	{
		//$model=$this->loadModel($id);
		$model = new Silhowell;

		$criteria  = new CDbCriteria;
		$criteria->condition = 'id_usuario = :id_usuario';
		$criteria->params = array(':id_usuario' => $id);
		$silhowells = Silhowell::model()->findAll($criteria);

		$criteria  = new CDbCriteria;
		$criteria->condition = 'user_id = :id_usuario';
		$criteria->params = array(':id_usuario' => $id);
		$profile = Profile::model()->find($criteria);

		if( !empty($silhowells) ){
			$this->render('index', array('silhowells'=>$silhowells,'profile'=>$profile));
		}else{
			$criteria  = new CDbCriteria;
			$criteria->condition = 'user_id = :id_usuario';
			$criteria->params = array(':id_usuario' => $id);
			$profile = Profile::model()->find($criteria);
			$model->id_usuario = $profile->user_id;

			$this->redirect(array('estadoinicial/create', 'idUsuario'=>$profile->user_id));
		}

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Silhowell('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Silhowell']))
			$model->attributes=$_GET['Silhowell'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Silhowell the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Silhowell::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Silhowell $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='silhowell-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
