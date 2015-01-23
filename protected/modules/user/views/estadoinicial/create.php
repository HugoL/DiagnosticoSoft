<?php
/* @var $this EstadoinicialController */
/* @var $model Estadoinicial */

$this->breadcrumbs=array(
	'Estadoinicials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estadoinicial', 'url'=>array('index')),
	array('label'=>'Manage Estadoinicial', 'url'=>array('admin')),
);
?>
<div class="row-fluid ficha">
	<div class="ficha">
		<?php  $this->widget('UserMenu',array('id_usuario'=>$model->id_usuario)); ?>
		<div class="contenido">
			<h1>Calcular el número de sesiones</h1>

			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
	</div>
</div>