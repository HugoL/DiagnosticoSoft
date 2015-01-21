<div class="row-fluid">
	<div class="span12"><center><?php $this->widget('bootstrap.widgets.TbButton', array(
		'label'=>'Listado de clientes',
    				'type'=>'info', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    				'size'=>'large', // null, 'large', 'small' or 'mini'
    				'icon'=>'arrow-left white',
    				'url'=>array('user/listarHijos'),
    				'toggle'=>false,
    				)); ?></center></div>
    		<?php if( !empty($model) ): ?>
    		<h1>Ficha de <?php echo  CHtml::encode($model->firstname." ".$model->lastname); ?></h1>

    			<div class="row-fluid">
    				<div class="ficha">
					<?php  $this->widget('UserMenu',array('id_usuario'=>$model->user_id)); ?>
					<div class="contenido">
						<?php if(Yii::app()->user->hasFlash('success')):?>
		    				<div class="alert alert-success">
		    				    <?php echo Yii::app()->user->getFlash('success'); ?>
		    				</div>
						<?php endif; ?>
						<?php if(Yii::app()->user->hasFlash('error')):?>
		    				<div class="alert alert-error">
		    				    <?php echo Yii::app()->user->getFlash('error'); ?>
		    				</div>
						<?php endif; ?>
						<?php $this->renderPartial('_formtratamiento', array('model'=>$tratamiento,'user'=>$model)); ?>

					<div class="clearfix">&nbsp;</div>
					<?php if( !empty($tratamientos) ): ?>
						<h3>Tratamientos del cliente:</h3>
						<table class="table">
							<thead>
								<tr>
									<th>Tratamiento</th>
									<th>Fecha Inicio</th>
									<th>Fecha Fin</th>
									<th>Descripción</th>
									<th>Finalizado</th>
									<th>Precio</th>
									<th>Sesiones</th>
									<th>Observaciones</th>
								</tr>
							</thead>
						<?php foreach ($tratamientos as $key => $tratamiento) : ?>
							<tr>
								<td><?php echo $tratamiento->tratamiento; ?></td>
								<td><?php echo date('d-m-Y',strtotime($tratamiento->fecha_inicio)); ?></td>
								<td><?php echo date('d-m-Y',strtotime($tratamiento->fecha_fin)); ?></td>
								<td><?php echo $tratamiento->descripcion; ?></td>
								<td><?php echo $tratamiento->finalizado == 1 ? "Sí" : "No" ; ?></td>
								<td><?php echo $tratamiento->precio; ?> €</td>
								<td><?php echo $tratamiento->sesiones; ?></td>
								<td><?php echo $tratamiento->observaciones; ?>
							</tr>
						<?php endforeach; ?>	
					<?php else: ?>		
						<div class="alert alert-info">El cliente no tiene asignado ningún tratamiento todavía</div>
					<?php endif; ?>

					</div><!-- contenido -->
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
   </div>