<tr>
	<td><?php echo $hijo->lastname.", ".$hijo->firstname; ?></td>
	<td><?php echo $rol->nombre; ?></td>
	<td><a href="<?php echo Yii::app()->baseUrl."/user/user/verUsuario/id/".$hijo->user_id; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/ojo_small.png" width="30px" height="30px" title="Ver Detalle" class="img-rounded" alt="Ver Usuario"></a><?php if(Yii::app()->getModule('user')->esAlgunAdmin()): ?>&nbsp;&nbsp;&nbsp;<a href="<?php echo Yii::app()->baseUrl."/user/admin/update/id/".$hijo->user_id; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/lapiz_small.png" width="30px" height="30px" title="Editar" class="img-rounded" alt="Ver Usuario"></a><?php endif; ?></td>
</tr>