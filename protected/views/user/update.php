<?php

$this->breadcrumbs = array(
    'Daftar User' => array('index'),
    'Peruabahan Data',
);


$menu = array();
require(dirname(__FILE__) . DIRECTORY_SEPARATOR . '_menu.php');
$this->menu = array(
    array('label' => 'Daftar User', 'url' => array('index'), 'icon' => 'fa fa-qrcode', 'items' => $menu)
);

?>



<?php

$this->widget('bootstrap.widgets.TbAlert', array(
//    'block' => false, // display a larger alert block?
    'fade' => true, // use transitions?
    'closeText' => '&times;', // close link text - if set to false, no close link is displayed
    'alerts' => array(// configurations per alert type
        'success' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'info' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'warning' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'error' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
        'danger' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), //success, info, warning, error or danger
    ),
));
?><?php echo $this->renderPartial('_form', array('model' => $model)); ?>
