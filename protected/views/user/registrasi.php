<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$box = $this->beginWidget(
        'bootstrap.widgets.TbBox', array(
    'title' => 'Registrasi  User ',
    'headerIcon' => 'icon- fa fa-qrcode',
        )
);


/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs = array(
    'User' => array('index'),
    'Registrasi Pribadi & User',
);
?>
<?php
$this->widget('bootstrap.widgets.TbAlert', array(
    'block' => false, // display a larger alert block?
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
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'import-admin-form',
    'type' => 'inline',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
    'action' => $this->createUrl('registrasi'), //<- your form action here
        ));
?>
<?php echo $form->fileFieldRow($model, 'fileImport'); ?> 
<label>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => 'Lakukan Proses Registrasi...',
        'icon' => 'fa fa-upload'
    ));
    ?>
</label>

<label>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'link',
        'type' => 'primary',
        'url' => Yii::app()->baseUrl . "/files/other/reg.xlsx",
        'label' => 'Download Template',
        'icon' => 'fa fa-download'
    ));
    ?>
</label>


<br/>
<br/>
[ Hanya type file : xls, xlsx, ods  yang dibolehkan ]
<?php $this->endWidget(); ?>
<?php
$this->endWidget();
