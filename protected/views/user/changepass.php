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
</style>

<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/groupbtn.css" />-->
<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'Daftar User' => array('index'),
    'Perubahan Password',
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
<?php echo $this->renderPartial('_changepass', array('model' => $model)); ?>

