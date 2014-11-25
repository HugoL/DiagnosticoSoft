<div class="row-fluid">
<h1>Usuarios a tu cargo</h1>
<div class="ficha contenido">
<?php if( !empty($hijos) ): ?>
<?php $this->widget('CLinkPager', array(
    'pages' => $paginas,
)) ?>

<div class="span12">
    <form id="custom-search-form" class="form-search form-horizontal pull-right" method="GET">
        <div class="input-append span12">
            <input type="text" class="search-query mac-style" placeholder="Buscar por nombre o apellidos" name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>">
            <button type="submit" class="btn"><i class="icon-search"></i></button>
        </div>
    </form>
</div>

<table class="table table-condensed table-hover">
	<tr class="info">
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Ver Ficha</th>
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