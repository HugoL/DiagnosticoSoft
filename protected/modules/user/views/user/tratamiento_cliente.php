<div class="row-fluid">
    		<?php if( !empty($model) ): ?>
    		<h1>Ficha de <?php echo  CHtml::encode($model->firstname." ".$model->lastname); ?></h1>

    			<div class="row-fluid">
    				<div class="ficha">
					<?php  $this->widget('ClienteMenu'); ?>
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
								</tr>
							</thead>
						<?php foreach ($tratamientos as $key => $tratamiento) : ?>
							<tr>
								<td><?php echo $tratamiento->tratamiento; ?></td>
								<td><?php echo date('d-m-Y',strtotime($tratamiento->fecha_inicio)); ?></td>
								<td><?php echo date('d-m-Y',strtotime($tratamiento->fecha_fin)); ?></td>
								<td><?php echo $tratamiento->descripcion; ?></td>
								<td><?php echo $tratamiento->finalizado == 1 ? "Sí" : "No" ; ?></td>
								<td><?php echo !empty($tratamiento->precio) ? $tratamiento->precio : "0"; ?> €</td>
								<td><?php echo $tratamiento->sesiones; ?></td>
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