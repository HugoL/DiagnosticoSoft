<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div> <br/>   		
<h1>Ficha de <?php echo  CHtml::encode($user->firstname." ".$user->lastname); ?></h1>

<div class="row-fluid ficha">
	<div class="ficha">
	   <?php  $this->widget('UserMenu',array('id_usuario'=>$user->user_id)); ?>
	   <div class="contenido container producto">
	   	<h1><?php echo $model->nombre; ?></h1>
	   	<?php echo $model->contenido; ?>
	   </div>
	</div>
</div>