<?php

class UserController extends Controller
{
	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return CMap::mergeArray(parent::filters(),array(
			'accessControl', // perform access control for CRUD operations
		));
	}
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view', 'listarHijos', 'verUsuario','observacion','test','medidas','peso'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('index'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}	

	/**
	 * Displays a particular model.
	 */
	public function actionView()
	{
		$model = $this->loadModel();
		$this->render('view',array(
			'model'=>$model,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User', array(
			'criteria'=>array(
		        'condition'=>'status>'.User::STATUS_BANNED,
		    ),
				
			'pagination'=>array(
				'pageSize'=>Yii::app()->controller->module->user_page_size,
			),
		));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionListarHijos( $pag = null){
		if( !Yii::app()->getModule('user')->esAlgunAdmin() ){
			$descendientes = $this->dameMisDescendientes();
			$criteria = new CDbCriteria;
			$criteria->addInCondition('id_padre',$descendientes,'OR');
		}else{
			$criteria = new CDbCriteria;
		}
		if( !empty($pag) ){
			//calcular el offset y el limit correspondientes a la página
		}
		$hijos = Profile::model()->findAll( $criteria );	
		$roles = Rol::model()->findAll();	

		$this->render( 'hijos',array('hijos'=>$hijos, 'roles'=>$roles) );
	}

	public function actionVerUsuario( $id ){
		$id = strip_tags( $id );

		if( !empty($id) && $id != 0 ){
			$user = User::model()->findbyPk( $id );
			$rol = Rol::model()->findbyPk($user->profile->rol);
			$this->render('verUsuario', array('user'=>$user, 'rol'=>$rol));
		}else{
			$this->redirect(CHttpRequest::getUrlReferrer());
		}	
	}

	public function actionObservacion( $id ){
		
		$id = htmlentities(strip_tags($id));
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :user_id';
		$criteria->params = array(':user_id' => $id);
		$user = Profile::model()->find($criteria);
		
		//tiene que ser hijo para poder crear una observacion
		$interruptor = false;
		if( Yii::app()->getModule('user')->esAlgunAdmin() || $user->id_padre == Yii::app()->user->id ){
			$interruptor = true;
		}
		if( $user->id_padre != Yii::app()->user->id ){
			$nietos = $this->dameMisDescendientes();
			foreach ($nietos as $key => $nieto) {
				if( $nieto->id_padre == Yii::app()->user->id ){
					$interruptor = true;
				}
			}
		}

		if( $interruptor ){
			$observacion = new Observacion;
			$criteria2 = new CDbCriteria;
			$criteria2->condition = 'id_usuario = :id_usuario';
			$criteria2->params = array(':id_usuario' => $user->user_id);
			$existe = Observacion::model()->find( $criteria2 );
			if( !empty($existe) )
				$observacion = $existe;
			//$this->performAjaxValidation(array($model,$profile));
			if( isset($_POST['Observacion']) ){			
				$observacion->attributes=$_POST['Observacion'];
				if( $observacion->save() )
					Yii::app()->user->setFlash('success', "Ficha de Observación guardada correctamente!");
				else
					Yii::app()->user->setFlash('error', "La ficha de observación no se ha podido guardar");				
			}

			$this->render('observacion',array(
				'model'=>$user,
				'observacion'=>$observacion,
			));
		}else{
			$this->redirect(Yii::app()->request->baseUrl.'/site/page/nopermitido');
		}
	}

	public function actionTest( $id ){
		
		$id = htmlentities(strip_tags($id));
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :user_id';
		$criteria->params = array(':user_id' => $id);
		$user = Profile::model()->find($criteria);
		
		//tiene que ser hijo para poder crear una observacion
		$interruptor = false;
		if( Yii::app()->getModule('user')->esAlgunAdmin() || $user->id_padre == Yii::app()->user->id ){
			$interruptor = true;
		}
		if( $user->id_padre != Yii::app()->user->id ){
			$nietos = $this->dameMisDescendientes();
			foreach ($nietos as $key => $nieto) {
				if( $nieto->id_padre == Yii::app()->user->id ){
					$interruptor = true;
				}
			}
		}

		if( $interruptor ){
			$tests = Test::model()->findAll();
			
			//$this->performAjaxValidation(array($model,$profile));
			if( isset($_POST['Test']) ){			
			
			}

			$this->render('test',array(
				'model'=>$user,
				'test'=>$tests,
			));
		}else{
			$this->redirect(Yii::app()->request->baseUrl.'/site/page/nopermitido');
		}
	}

	public function actionMedidas( $id ){
		
		$id = htmlentities(strip_tags($id));
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :user_id';
		$criteria->params = array(':user_id' => $id);
		$user = Profile::model()->find($criteria);
		
		//tiene que ser hijo para poder introducir las medidas
		$interruptor = false;
		if( Yii::app()->getModule('user')->esAlgunAdmin() || $user->id_padre == Yii::app()->user->id ){
			$interruptor = true;
		}
		if( $user->id_padre != Yii::app()->user->id ){
			$nietos = $this->dameMisDescendientes();
			foreach ($nietos as $key => $nieto) {
				if( $nieto->id_padre == Yii::app()->user->id ){
					$interruptor = true;
				}
			}
		}

		if( $interruptor ){
			$zonas = Zona::model()->findAll();
			$medidas = new Medidasusuario;
			//$this->performAjaxValidation(array($model,$profile));
			if (isset($_POST['Medidasusuario'])) {
		        $valid=true;
		        foreach ($_POST['Medidasusuario'] as $j=>$model){
		            if (isset($_POST['Medidasusuario'][$j])) {
		                $models[$j]=new Medidasusuario; // if you had static model only
		                $models[$j]->attributes=$model;
		                $valid=$models[$j]->validate() && $valid;
		            }
		        }
		        if ($valid) {
		            $i=0;
		            while (isset($models[$i])) {
		                $models[$i++]->save(false);// models have already been validated
		            }
		            // anything else that you want to do, for example a redirect to admin page
		            $this->redirect(array('medidas/id/'.$id));
		        }
		    	}

			$this->render('medidas',array(
				'user'=>$user,
				'zonas'=>$zonas,
				'medidas'=>$medidas,
			));
		}else{
			$this->redirect(Yii::app()->request->baseUrl.'/site/page/nopermitido');
		}
	}

	public function actionPeso( $id ){
		
		$id = htmlentities(strip_tags($id));
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :user_id';
		$criteria->params = array(':user_id' => $id);
		$user = Profile::model()->find($criteria);
		
		//tiene que ser hijo para poder crear una observacion
		$interruptor = false;
		if( Yii::app()->getModule('user')->esAlgunAdmin() || $user->id_padre == Yii::app()->user->id ){
			$interruptor = true;
		}
		if( $user->id_padre != Yii::app()->user->id ){
			$nietos = $this->dameMisDescendientes();
			foreach ($nietos as $key => $nieto) {
				if( $nieto->id_padre == Yii::app()->user->id ){
					$interruptor = true;
				}
			}
		}

		if( $interruptor ){
			$peso = new Peso;
			$criteria2 = new CDbCriteria;
			$criteria2->condition = 'id_usuario = :id_usuario';
			$criteria2->params = array(':id_usuario' => $user->user_id);
			$pesos = Peso::model()->findAll( $criteria2 );			
			//$this->performAjaxValidation(array($model,$profile));
			if( isset($_POST['Peso']) ){
				$peso->attributes=$_POST['Peso'];
				$peso->id_usuario = $user->user_id;
				if( !isset($peso->fecha))
					$peso->fecha = date('Y-m-d',strtotime($peso->fecha));
				if( $peso->save() ){
					$peso = new Peso;
					Yii::app()->user->setFlash('success', "El peso se ha guardado correctamente!");
				}else
					Yii::app()->user->setFlash('error', "No se ha podido guardar el peso");	


			}

			$this->render('peso',array(
				'user'=>$user,
				'peso'=>$peso,
				'pesos'=>$pesos,
			));
		}else{
			$this->redirect(Yii::app()->request->baseUrl.'/site/page/nopermitido');
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=User::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
	 */
	public function loadUser($id=null)
	{
		if($this->_model===null)
		{
			if($id!==null || isset($_GET['id']))
				$this->_model=User::model()->findbyPk($id!==null ? $id : $_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	protected function dameMisDescendientes(){
		//cojo los hijos
		$criteria = new CDbCriteria;
		$criteria->select = 'user_id';
		$criteria->condition = 'id_padre=:id_padre';
		$criteria->params = array(':id_padre' => Yii::app()->user->id);
		$hijos = Profile::model()->findAll( $criteria );			

		$arrayhijos = array();			
		foreach ($hijos as $hijo) {
			array_push($arrayhijos, $hijo->user_id);
		}

		//cojo los nietos
		$criteria3 = new CDbCriteria;
		$criteria3->select = 'user_id';
		$criteria3->addInCondition('id_padre',$arrayhijos, 'OR');
		$nietos = Profile::model()->findAll( $criteria3 );

		array_push($arrayhijos, Yii::app()->user->id);

		foreach ($nietos as $nieto) {
			array_push($arrayhijos, $nieto->user_id);
		}

		return $arrayhijos;
	}
}
