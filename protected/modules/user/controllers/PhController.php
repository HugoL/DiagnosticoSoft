<?php

class PhController extends Controller
{
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}	

	/**
	 * Muestra toda la información
	 */
	public function actionIndex( $id )
	{
		$id = htmlentities(strip_tags($id));
		$criteria = new CDbCriteria;
		$criteria->condition = 'user_id = :user_id';
		$criteria->params = array(':user_id' => $id);
		$user = Profile::model()->find($criteria);

		$this->render('index',array('user'=>$user));
	}
}
