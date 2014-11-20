<?php
/* @var $this CentroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Centros',
);

$this->menu=array(
	array('label'=>'Create Centro', 'url'=>array('create')),
	array('label'=>'Manage Centro', 'url'=>array('admin')),
);
?>

<h1>Centros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
