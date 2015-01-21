<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($user) ): ?>
    			<h1>Ficha de <?php echo $user->profile->firstname." ".$user->profile->lastname; ?></h1>
    			<div class="row-fluid">
    				<div class="ficha">
					<?php  $this->widget('UserMenu',array('id_usuario'=>$user->profile->user_id)); ?>
					<div class="contenido">
						<div class="row-fluid">
							<div class="well well-small span3">Tipo de usuario: <strong><?php echo $rol->nombre; ?></strong></div>
						</div>
						<div class="row-fluid">
							<div class="well well-small span6">Nombre: <strong><?php echo $user->profile->firstname." ".$user->profile->lastname; ?></strong></div>
							<div class="well well-small span5">Nombre de usuario: <strong><?php echo $user->username; ?></strong></div>
						</div>
						<div class="row-fluid">
							<div class="well well-small span6">Teléfono: <strong><?php echo $user->profile->telefono. "&nbsp;&nbsp;&nbsp;".$user->profile->movil; ?></strong></div>
							<div class="well well-small span5">Fecha Nacimiento: <strong>
								<?php if( !empty($user->profile->fechanacimiento) ): ?>
									<span><?php echo date( 'd-m-Y',strtotime($user->profile->fechanacimiento) ); ?></span>
									<?php if( $edad != 0 ): ?>
										<span>(<?php echo $edad; ?> años)</span>
									<?php endif; ?>
								<?php else: ?>
									<span>No definida</span>
								<?php endif; ?>
								</strong></div>
						</div>
						<div class="row-fluid">
							<div class="well well-small span6">Dirección: <strong><?php echo $user->profile->direccion. ", ".$user->profile->poblacion.", ".$user->profile->provincia; ?></strong></div>
							<div class="well well-small span5">CP: <strong><?php echo $user->profile->codigo_postal; ?></strong></div>
						</div>
						<div class="row-fluid">
							<?php if( !empty($user->profile->altura) || $user->profile->altura != 0 ): ?>
								<div class="well well-small span6">Altura: <strong><?php echo $user->profile->altura; ?> m.</strong></div>
							<?php endif; ?>
							<?php if( !empty($user->profile->morfologia) ): ?>
								<div class="well well-small span5">Morfología: <strong><?php echo $user->profile->morfologia; ?></strong></div>
							<?php endif; ?>
						</div>	
						<div class="row-fluid">
							<div class="span12"><center><?php echo CHtml::link('Modificar',array('admin/update/id/'.$user->id),array('class' => 'btn btn-info btn-large')); ?></center></div>
						</div>
											
					</div><!-- /contenido -->
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
   </div>