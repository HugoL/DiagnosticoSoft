<div class="row-fluid">
    		<?php if( !empty($user) ): ?>
    			<h1>Ficha de <?php echo $user->firstname." ".$user->lastname; ?></h1>
    			<div class="row-fluid">
    				<div class="ficha">
					<?php  $this->widget('ClienteMenu'); ?>
					<div class="contenido">
						<div><?php if( !empty($user->recomendaciones)): ?></div>
								<?php echo $user->recomendaciones; ?>
							<?php else: ?>
								<div class="alert alert-info">No tienes recomendaciones todavía</div>
							<?php endif; ?>
							<div class="clearfix">&nbsp;</div>
					</div><!-- /contenido -->
					</div><!-- /ficha -->
    			</div><!-- /row-fluid -->
    		<?php else: ?>
    			<div class="alert alert-warning">No se ha definido ningún usuario</div>
    		<?php endif;?>
   </div>