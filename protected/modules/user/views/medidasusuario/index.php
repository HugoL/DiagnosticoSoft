<?php
/* @var $this MedidasusuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medidasusuarios',
);

$this->menu=array(
	array('label'=>'Create Medidasusuario', 'url'=>array('create')),
	array('label'=>'Manage Medidasusuario', 'url'=>array('admin')),
);
?>

<h1>Medidasusuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
