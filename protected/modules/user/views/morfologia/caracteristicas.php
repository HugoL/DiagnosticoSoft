<div class="row-fluid">
<?php if( !empty($profile) && !empty($morfologia) ): ?>
	<div class="span12">
		<div class="ficha contenido">			
			<div class="span2">&nbsp;</div>
			<div class="span8 caracteristicas">
				<center><h2>Morfología <?php echo $morfologia->nombre; ?></h2></center>
				<div class="thumbnail image"><img src="<?php echo Yii::app()->baseUrl ?>/images/<?php echo $morfologia->imagen; ?>" class="img-rounded" alt="Morfologia"></div>
				<?php echo $morfologia->caracteristicas; ?>				
			</div>
			<div class="span2">&nbsp;</div>
			<div class="clearfix">&nbsp;</div>
		</div><!-- /ficha -->
	</div>
<?php else: ?>
	<div class="alert alert-warning">No se ha definido la morfología de este cliente todavía</div>
<?php endif; ?>
</div>