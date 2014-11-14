<div class="row-fluid">
<?php if( $model->profile->rol != $rol->id ): ?>
    <div class="alert alert-danger">No puedes acceder aquí</div>
<?php else: ?>
    
        <h3>Interfaz de <?php echo $rol->nombre; ?></h3>

         <div class="form-group product-chooser">
        <div class="row-fluid">
        <div class="span4">
            <center><div class="product-chooser-item">
                <div class="well-orange">
                <a href="<?php echo Yii::app()->baseUrl.'/user/admin/create'; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/usuario.png" class="img-rounded" alt="Añadir cliente"></a>
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Añadir cliente</span>
                    <span class="description">Comenzar seguimiento de un nuevo cliente</span>
                </div>
            </div>
            </div>
        </center>
        </div>

         <div class="span4">
            <center><div class="product-chooser-item">
                <div class="well-orange">
                <a href="<?php echo Yii::app()->baseUrl.'/user/user/listarHijos'; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/usuarios2.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Listado de clientes"></a>
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Ver mis clientes</span>
                    <span class="description">Listado de clientes</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
            </div>
            </div></center>
        </div>
            <div class="span4">
            <center><div class="product-chooser-item">
                <div class="well-orange">
                 <a href="<?php echo Yii::app()->baseUrl.'/user/venta/index'; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/informe.png" class="img-rounded" alt="Diagnóstico"></a>
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Diagnóstico</span>
                    <span class="description">Realizar un diagnóstico</span>
                </div>
            </div>
            </div></center>
        </div>
    </div>
    <div class="row-fluid">
       
         <div class="span4">
            <center><div class="product-chooser-item">
                <div class="well-orange">
                 <a href="<?php echo Yii::app()->baseUrl.'/user/profile'; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/preferencias.png" class="img-rounded" alt="Perfil"></a>
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Perfil</span>
                    <span class="description">Ver mi perfil</span>
                </div>
            </div>
            </div></center>
        </div>
        <div class="span4">
            <center><div class="product-chooser-item">
                <div class="well-orange">
                 <a href="<?php echo Yii::app()->baseUrl.'/user/profile/contact'; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/sobre.png" class="img-rounded" alt="Contacto"></a>
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Contacto</span>
                    <span class="description">Contacta con nosotros</span>
                </div>
            </div>
            </div></center>
        </div>
         <div class="span4">
            <center><div class="product-chooser-item">
                <div class="well-orange">
                 <a href="<?php echo Yii::app()->baseUrl.'/user/logout'; ?>"><img src="<?php echo Yii::app()->baseUrl ?>/images/apagar.png" class="img-rounded" alt="Perfil"></a>
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Salir</span>
                    <span class="description">Salir de SiluSoft</span>
                </div>
            </div>
            </div></center>
        </div>
    </div><!-- row-fluid -->
    </div>
<?php endif; ?>
</div>