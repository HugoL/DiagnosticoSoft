<?php
/* @var $this MorfologiaController */
/* @var $model Morfologia */

$this->breadcrumbs=array(
	'Morfologias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Morfologia', 'url'=>array('index')),
	array('label'=>'Manage Morfologia', 'url'=>array('admin')),
);
?>

<h1>Create Morfologia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>