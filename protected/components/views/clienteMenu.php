<ul class="nav nav-tabs">  
	<li <?php if( strcmp(Yii::app()->controller->action->id,'verUsuario') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Datos',array('user/verUsuario/id/'.Yii::app()->user->id)); ?></li> 
	<li <?php if( strcmp(Yii::app()->controller->action->id,'medidas') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Medidas',array('user/medidas/id/'.Yii::app()->user->id));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'peso') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Peso',array('user/peso/id/'.Yii::app()->user->id));?></li>	
	<li <?php if( strcmp(Yii::app()->controller->action->id,'tratamiento') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Tratamientos',array('user/tratamiento/id/'.Yii::app()->user->id));?></li>
	<li <?php if( strcmp(Yii::app()->controller->action->id,'verRecomendados') == 0 ): ?> class="active" <?php endif; ?>><?php echo CHtml::link('Productos Recom.',array('user/verRecomendados'));?></li>		    		
</ul>