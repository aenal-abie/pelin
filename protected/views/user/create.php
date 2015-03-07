
<style>
    .bootstrap-widget-content{
        //padding: 0px;
    }
    .items{
        line-height:2em;
    }
    .bootstrap-widget {
        margin-bottom: 0em; 
    }
    .btn {
        -webkit-border-radius: 0px; 
        border-radius: 0px; 

    }


/*    .login  input[type=text], input[type=password] {
         margin: 0px; 
         padding: 4px 6px;
         width: 366px; 
         height: 20px; 
         color: #404040; 
         background: white; 
         border: 1px solid; 
         border-color: #c4c4c4 #d1d1d1 #d4d4d4; 
        -moz-outline-radius: 3px;
         -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12); 
         box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12); 
    }*/

    #alumni-grid{
        margin-top: -10px;
    }
</style>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/groupbtn.css" />


<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Daftar User' => array('index'),
    'Tambah User',
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
?>		
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>
