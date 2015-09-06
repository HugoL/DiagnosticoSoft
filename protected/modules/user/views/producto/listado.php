<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>    		
<h1>Ficha de <?php echo  CHtml::encode($user->firstname." ".$user->lastname); ?></h1>

<div class="row-fluid ficha">
<div class="ficha">
   <?php  $this->widget('UserMenu',array('id_usuario'=>$user->user_id)); ?>
   <div class="contenido container productos">
   		<h3>Tratamientos del cliente:</h3>
			<table class="table">				
		   		<?php foreach ($productos as $key => $producto): ?>
		   			<tr>
		   				<td><?php echo $producto->nombre; ?></td>
		   				<td><?php echo CHtml::link('Ver producto',array('view/id/'.$producto->id)); ?></td>
		   			</tr>
		   		<?php endforeach; ?>
		   	</table>
   	</div>
   </div>
</div>
