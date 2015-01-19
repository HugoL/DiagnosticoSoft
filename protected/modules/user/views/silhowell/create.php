<?php
/* @var $this SilhowellController */
/* @var $model Silhowell */

$this->breadcrumbs=array(
	'Silhowells'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Silhowell', 'url'=>array('index')),
	array('label'=>'Manage Silhowell', 'url'=>array('admin')),
);
?>

<h1>Comenzar Silhowell</h1>

<h3><?php echo CHtml::encode($profile->firstname); ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>