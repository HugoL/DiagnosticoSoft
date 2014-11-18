<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($user) ): ?>
    			<h1>Ficha de <?php echo $user->profile->firstname." ".$user->profile->lastname; ?></h1>
    			<div class="row-fluid">
    				<div class="ficha">
					<ul class="nav nav-tabs">  
						<li class="active"><a href="#">Datos</a></li> 
						<li><?php echo CHtml::link('Observación',array('user/observacion/id/'.$user->id));?></li>   
						<li><?php echo CHtml::link('Test',array('user/test/id/'.$user->id));?></li>
						<li><?php echo CHtml::link('Medidas',array('user/medidas/id/'.$user->id));?></li>
						<li><?php echo CHtml::link('Peso',array('user/peso/id/'.$user->id));?></li>	
					</ul>
					
						<div class="well well-small span6">Nombre: <strong><?php echo $user->profile->firstname." ".$user->profile->lastname; ?></strong></div>
						<div class="well well-small span6">Dirección: <strong><?php echo $user->profile->direccion." ".$user->profile->codigo_postal." ".$user->profile->poblacion." ".$user->profile->provincia; ?></strong></div>
						<div class="row-fluid">
							<div class="well well-small span6">Teléfono: <strong><?php echo $user->profile->telefono." ".$user->profile->movil; ?></strong></div>
							<div class="well well-small span6">Tipo: <strong><?php echo $rol->nombre; ?></strong></div>
						</div>
						<div class="row-fluid">
							<div class="well well-small span6">Email: <strong><?php echo $user->email; ?></strong></div>
						</div>
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
   </div>