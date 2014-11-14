<?php
/* @var $this PesoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pesos',
);

$this->menu=array(
	array('label'=>'Create Peso', 'url'=>array('create')),
	array('label'=>'Manage Peso', 'url'=>array('admin')),
);
?>

<h1>Pesos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
