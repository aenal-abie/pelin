<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'file-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

<!--<p class="help-block">Fields with <span class="required">*</span> are required.</p>-->

<?php
$this->widget('bootstrap.widgets.TbAlert', array(
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

<?php echo $form->errorSummary($model); ?>

<?php echo (!$model->isNewRecord) ? $model->file : ""; ?>

<?php // echo $form->textFieldGroup($model,'materi_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5'))));  ?>

<?php echo $form->fileFieldGroup($model, 'file', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 45)))); ?>

<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'icon' => 'fa fa-upload',
        'label' => $model->isNewRecord ? 'Upload File' : 'Upload Ulang File',
    ));
    ?>

    <?php
    if (!$model->isNewRecord) {
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'link',
            'url' => '#',
            'context' => 'danger',
            'icon' => 'fa fa-trash-o',
            'label' => 'Hapus File Ini',
            'htmlOptions' => array(
                'onclick' => 'js:bootbox.confirm("<h3>Hapus File</h3>Anda Yakin Menghapus File ini ?",
             function(confirmed){
                if(confirmed) {
                   window.location = "' . Yii::app()->createUrl('//file/delete', array('id' => $_GET['id'])) . '";
                }
             })'
            ),
        ));
        ?>

        <?php
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'link',
            'url' => Yii::app()->createUrl('//file/download', array('id' => $_GET['id'])),
            'context' => 'success',
            'icon' => 'fa fa-download',
            'label' => 'Download File Ini',
        ));
    }
    ?>
</div>

<?php $this->endWidget(); ?>
