<section class="col-lg-5 connectedSortable">
    <?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle = Yii::app()->name . ' - Login';
    $this->breadcrumbs = array(
        'Login',
    );


    $this->beginWidget('ext.Box', array(
        'title' => 'Reset Password',
        'sectionClass' => '5'));
    ?>



    <div role="form" class="form">
        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>
        <?php if ($success == TRUE && $ketemu == 2) { ?>
            <div class="alert alert-info alert-dismissable">
                <i class="fa fa-info"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Perhatian! </b> Silahkan cek email anda, jika tidak ditemukan di inbox (Pesan Masuk) anda, cek spam pada email anda.
            </div>
        <?php } else if ($ketemu == 1) { ?>
            <div class="alert alert-warning alert-dismissable">
                <i class="fa fa-info"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Perhatian! </b> Email tidak ditemukan, silahkan data email. Hubungi pustik jika belum ketemu solusinya
            </div>
        <?php } ?>
        <?php echo $form->textFieldGroup($model, 'email', array('widgetOptions' => array('options' => array(), 'htmlOptions' => array('autocomplete' => 'off', 'class' => 'span5')), 'prepend' => '<i class="glyphicon fa fa-users"></i>')); ?>


        <div class="form-actions">
            <?php
            $this->widget('booster.widgets.TbButton', array(
                'buttonType' => 'submit',
                'context' => 'primary',
                'icon' => 'fa fa-envelope',
                'label' => 'Reset Password',
            ));
            ?>
            <?php echo CHtml::link('<i class ="fa fa-sign-in"></i> Login Sekarang !!! ', Yii::app()->createUrl('site/login'), array('class' => 'btn btn-flat btn-warning')); ?>
        </div>


        <?php $this->endWidget(); ?>
        <?php $this->endWidget(); ?>
    </div><!-- form -->
</section>
<section class="col-lg-7 connectedSortable">
    <?php
    $this->renderPartial('//group/_listTable', array('sectionClass' => 7, 'list' => $data));
    ?>

</section>