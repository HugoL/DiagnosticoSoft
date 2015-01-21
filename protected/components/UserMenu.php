<?php
Yii::import('zii.widgets.CPortlet');
 
class UserMenu extends CPortlet
{
	public $id_usuario;

    public function init()
    {
        $this->title=CHtml::encode("Ficha de cliente");
        parent::init();
    }
 
    protected function renderContent()
    {
    	
        $this->render('userMenu',array('id_usuario'=>$this->id_usuario));
    }
}
?>