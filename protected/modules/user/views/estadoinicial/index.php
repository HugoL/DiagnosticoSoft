<?php
/* @var $this EstadoinicialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadoinicials',
);

$this->menu=array(
	array('label'=>'Create Estadoinicial', 'url'=>array('create')),
	array('label'=>'Manage Estadoinicial', 'url'=>array('admin')),
);
?>

<h1>Estadoinicials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
