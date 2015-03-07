<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'tugas-form',
    'enableAjaxValidation' => false,
        ));
?>

<!--<p class="help-block">Fields with <span class="required">*</span> are required.</p>-->

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldGroup($model, 'judul', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>


<?php echo $form->textAreaGroup($model, 'diskripsi', array('widgetOptions' => array('htmlOptions' => array('rows' => 6, 'cols' => 50, 'class' => 'span8')))); ?>

<?php echo $form->dateTimePickerGroup($model, 'waktu_selesai', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5')))); ?>



<?php // echo $form->textFieldGroup($model, 'jenis', array('widgetOptions' => array('htmlOptions' => array('class' => 'span5', 'maxlength' => 20)))); ?>

<div class="form-actions">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'context' => 'primary',
        'icon' => 'fa fa-tasks',
        'label' => $model->isNewRecord ? 'Simpan Tugas Baru' : 'Ubah Tugas Ini',
    ));
    ?>

    <?php
    if (!$model->isNewRecord) {
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'link',
            'context' => 'primary',
            'url' => '#',
            'icon' => 'fa fa-trash-o',
            'label' => 'Hapus Tugas Ini',
            'htmlOptions' => array(
                'onclick' => 'js:bootbox.confirm("<h3>Hapus Tugas</h3>Anda Yakin Menghapus Tugas ini ?",
             function(confirmed){
                if(confirmed) {
                   window.location = "' . Yii::app()->createUrl('//tugas/delete', array('id' => $model->id)) . '";
                }
             })'
            ),
        ));
    }
    ?>
</div>

<?php $this->endWidget(); ?>
