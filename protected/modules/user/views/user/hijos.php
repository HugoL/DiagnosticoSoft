<div class="row-fluid">
<h1>Usuarios a tu cargo</h1>
<div class="ficha contenido">
<?php if( !empty($hijos) ): ?>
<?php $this->widget('CLinkPager', array(
    'pages' => $paginas,
)) ?>
<table class="table table-condensed">
	<tr>
		<th>Nombre</th>
		<th>Tipo</th>
		<th></th>
	</tr>
	<?php foreach ( $hijos as $hijo ): 
		foreach ($roles as $key => $rol) {
			if( $rol->id == $hijo->rol )
				$rolModel = $rol;
		}
		$this->renderPartial( '_detalle',array('hijo'=>$hijo, 'rol'=>$rolModel) );
	endforeach; ?>
</table>
<?php $this->widget('CLinkPager', array(
    'pages' => $paginas,
)) ?>
<?php else: ?>
	<div class="alert alert-info">Todavía no tienes usuarios a tu cargo</div>
<?php endif;?>
</div>
</div>