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
				'actions'=>array('view', 'listarHijos', 'verUsuario','observacion','test','medidas','peso','tratamiento'),
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
			if( isset($_GET['q']) ){
      			$q = strip_tags($_GET['q']);
      			$criteria->compare('firstname', $q, true, 'OR');
      			$criteria->compare('lastname', $q, true, 'OR');
    		}
			$criteria->addInCondition('id_padre',$descendientes,'AND');
			$criteria->order = 'lastname';
		}else{
			$criteria = new CDbCriteria;
		}
		if( !empty($pag) ){
			//calcular el offset y el limit correspondientes a la página
		}

		$hijos = Profile::model()->findAll( $criteria );	
		$roles = Rol::model()->findAll();	

    	$count=Profile::model()->count($criteria);
    	$pages=new CPagination($count);

    	// results per page
    	$pages->pageSize=20;
    	$pages->applyLimit($criteria);

		$this->render( 'hijos',array('hijos'=>$hijos, 'roles'=>$roles, 'paginas' => $pages) );
	}

	public function actionVerUsuario( $id ){
		$id = strip_tags( $id );
		$edad = 0;
		$interruptor = false;
		if( !empty($id) && $id != 0 ){
			$user = User::model()->findbyPk( $id );
			$profile = $user->profile;
			if( Yii::app()->getModule('user')->esAlgunAdmin() || $profile->id_padre == Yii::app()->user->id || $profile->user_id = Yii::app()->user->id ){
				$interruptor = true;
			}
			if( $profile->id_padre != Yii::app()->user->id && $profile->user_id != Yii::app()->user->id ){
				$nietos = $this->dameMisDescendientes();
				foreach ($nietos as $key => $nieto) {
					if( $nieto->id_padre == Yii::app()->user->id ){
						$interruptor = true;
					}
				}
			}

			if( $interruptor ){
				//calculo la edad
				if( !empty($user->profile->fechanacimiento) && strcmp($user->profile->fechanacimiento,'0000-00-00') != 0 ){
					//explode the date to get month, day and year
					$fechanacimiento = date( 'd-m-Y',strtotime($user->profile->fechanacimiento) );
	  				$birthDate = explode("-", $fechanacimiento);
	  				//get age from date or birthdate
	  				$edad = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
	    				? ((date("Y") - $birthDate[2]) - 1)
	    				: (date("Y") - $birthDate[2]));
				}
				$rol = Rol::model()->findbyPk($user->profile->rol);
				if( strcmp($rol->nombre, 'cliente') == 0 )
					$this->render('vistaCliente', array('user'=>$user, 'rol'=>$rol,'edad'=>$edad));
				else
					$this->render('verUsuario', array('user'=>$user, 'rol'=>$rol,'edad'=>$edad));
			}else{
				$this->redirect(CHttpRequest::getUrlReferrer());
			}
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
			if( isset($_POST['Profile']) ){			
				$morfologia = new Profile;
				$morfologia->attributes = $_POST['Profile'];

				$user->morfologia = $morfologia->morfologia;

				$user->save();
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
		

		if( $this->esDescendiente($user) ){
			$zonas = Zona::model()->findAll();
			$medidas = new Medidasusuario;			
			if (isset($_POST['Medidasusuario'])) {
		        $valid = true;
		        $todook = true;
		        $cuantos = 0;
		       foreach ($_POST['Medidasusuario'] as $j=>$model){
		        	$models[] = Medidasusuario::model(); 
		        }
		        foreach ($_POST['Medidasusuario'] as $j=>$model){	        	
		            if ( isset($_POST['Medidasusuario'][$j]) ) {            	
		                $models[$j] = new Medidasusuario; // if you had static model only
		                $models[$j]->attributes=$model;
		                if( empty($models[$j]->fecha) )
		                	$models[$j]->fecha = date('Y-m-d');
		              
		                if( !empty($models[$j]->valor) && is_numeric($models[$j]->valor) )
		                	if( !$models[$j]->save(false) ){
		                		$todook = false;	                
		                	}else{
		                		$cuantos++;
		                	}
		            }
		        }	

		        if( $todook ){
		        	if( $cuantos == 0)
		        		Yii::app()->user->setFlash('warning', "No se ha guardado ninguna medida");
		        	else
		           		Yii::app()->user->setFlash('success', "Las medidas se han guardado correctamente!");
		        }else{
		           	Yii::app()->user->setFlash('error', "No se han guardado las medidas, o al menos no todas. Medidas guardadas: ".$cuantos);	        
		        }
		    }

		    //cojo las medidas del usuario para hacer la gráfica
		    $criteria2 = new CDbCriteria;
		    $criteria2->group = 'fecha';
			$criteria2->select = 'sum(valor) AS total, fecha, id_zona';
		    $criteria2->condition = 'id_usuario=:id_usuario';
		    $criteria2->params = array(':id_usuario' => $id);
		    $totalmedidas = Medidasusuario::model()->findAll( $criteria2 );

			$this->render('medidas',array(
				'user'=>$user,
				'zonas'=>$zonas,
				'medidas'=>$medidas,
				'totalmedidas'=>$totalmedidas,
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
						
			//$this->performAjaxValidation(array($model,$profile));
			if( isset($_POST['Peso']) ){
				$peso->attributes=$_POST['Peso'];
				$peso->id_usuario = $user->user_id;

				if( !empty($peso->fecha) ){
					$peso->fecha = date('Y-m-d',strtotime($peso->fecha));
				}else{
					$peso->fecha = date('Y-m-d');
				}

				if( $peso->save() ){
					$peso = new Peso;
					Yii::app()->user->setFlash('success', "El peso se ha guardado correctamente!");
				}else
					Yii::app()->user->setFlash('error', "No se ha podido guardar el peso");	


			}
			$pesos = Peso::model()->findAll( $criteria2 );
			$this->render('peso',array(
				'user'=>$user,
				'peso'=>$peso,
				'pesos'=>$pesos,
			));
		}else{
			$this->redirect(Yii::app()->request->baseUrl.'/site/page/nopermitido');
		}
	}

	public function actionTratamiento( $id ){
		
		$id = htmlentities(strip_tags($id));
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :user_id';
		$criteria->params = array(':user_id' => $id);
		$user = Profile::model()->find($criteria);
		
		//tiene que ser hijo para poder crear un tratamiento
		if( $this->esDescendiente( $user ) ){
			$tratamiento = new Tratamiento;
			$criteria2 = new CDbCriteria;
			$criteria2->condition = 'id_usuario = :id_usuario';
			$criteria2->params = array(':id_usuario' => $user->user_id);
						
			//$this->performAjaxValidation(array($model,$profile));
			if( isset($_POST['Tratamiento']) ){
				$tratamiento->attributes=$_POST['Tratamiento'];
				$tratamiento->id_usuario = $user->user_id;

				if( !empty($tratamiento->fecha_inicio) )
					$tratamiento->fecha_inicio = date('Y-m-d',strtotime($tratamiento->fecha_inicio));
				else
					$tratamiento->fecha_inicio = date('Y-m-d');

				if( !empty($tratamiento->fecha_fin) )
					$tratamiento->fecha_fin = date('Y-m-d',strtotime($tratamiento->fecha_fin));
				else
					$tratamiento->fecha_fin = date('Y-m-d');


				if( $tratamiento->save() ){
					$tratamiento = new Tratamiento;
					Yii::app()->user->setFlash('success', "El tratamiento se ha guardado correctamente!");
				}else
					Yii::app()->user->setFlash('error', "No se ha podido guardar el tratamiento");	


			}
			$tratamientos = Tratamiento::model()->findAll( $criteria2 );
			$this->render('tratamiento',array(
				'model'=>$user,
				'tratamiento'=>$tratamiento,
				'tratamientos'=>$tratamientos,
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

	protected function esDescendiente( $user ){
		if( $user->id_padre == Yii::app()->user->id ){
			return true;
		}
		if( $user->id_padre != Yii::app()->user->id ){
			$nietos = $this->dameMisDescendientes();
			foreach ($nietos as $key => $nieto) {
				if( $nieto->id_padre == Yii::app()->user->id ){
					return true;
				}
			}
		}
		return false;
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
