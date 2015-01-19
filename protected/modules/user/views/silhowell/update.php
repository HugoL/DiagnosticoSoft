<?php
/* @var $this SilhowellController */
/* @var $model Silhowell */

$this->breadcrumbs=array(
	'Silhowells'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Silhowell', 'url'=>array('index')),
	array('label'=>'Create Silhowell', 'url'=>array('create')),
	array('label'=>'View Silhowell', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Silhowell', 'url'=>array('admin')),
);
?>

<h1>Update Silhowell <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>