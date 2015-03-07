
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
        /*-webkit-border-radius: 0px;*/ 
        /*border-radius: 0px;*/ 

    }

    #alumni-grid{
        margin-top: -10px;
    }
</style>


<style>
    .alert {
        /*        padding-left: 30px;
                margin-left: 15px;
                position: relative;
                border-radius: 50px;*/
    }
</style>
<section class="col-lg-7 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Register Mahasiswa',
        'sectionClass' => '7'));

    $this->widget('bootstrap.widgets.TbAlert', array(
        // 'block' => false, // display a larger alert block?
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

    <?php if (Yii::app()->user->isGuest) : ?>

        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'user-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            //'enableAjaxValidation'=>false,
            'htmlOptions' => array('class' => 'login'),
//                    'type' => 'horizontal'
        ));
        ?>


        <?php echo $form->errorSummary($model); ?>

        <?php echo $form->textFieldGroup($model, 'username', array('class' => 'span5', 'style' => "width: 800px", 'maxlength' => 10, 'placeholder' => 'Nomor Induk Mahasiswa [NIM]')); ?>
        <?php echo $form->passwordFieldGroup($model, 'password', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Password', 'maxlength' => 100)); ?>
        <?php echo $form->passwordFieldGroup($model, 'password_repeat', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Ulangi Password', 'maxlength' => 100)); ?>
        <?php echo $form->textFieldGroup($model, 'nama_lengkap', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Nama Lengkap Anda', 'maxlength' => 50)); ?>
        <?php echo $form->textFieldGroup($model, 'email', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Masukkan Email Anda', 'maxlength' => 50)); ?>
        <?php
        echo $form->dropDownListGroup($model, 'jurusan', array('widgetOptions' =>
            array('data' => NamaJurusan::model()->getlistNamaJurusan(), 'class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Masukkan Email Anda', 'maxlength' => 50)));
        ?>
        <?php // echo $form->dropDownListRow($model, 'id_pribadi', Pribadi::model()->getOptions(), array('class' => 'span5', 'maxlength' => 20)); ?>
        <?php //echo $form->textFieldRow($model, 'joinDate', array('class' => 'span5')); ?>
        <?php // $_level = array('1' => 'User', '2' => 'Admin'); ?>
        <?php echo $form->captchaGroup($model, 'verifyCode', array('class' => 'span5')); ?>
    <?php // echo $form->textFieldGroup($model, 'verifyCode', array('class' => 'span5', 'style' => "width: 800px", 'placeholder' => 'Nama Lengkap Anda', 'maxlength' => 50));   ?>
        <!--</form>-->
        <div class="span11">
            <div>
                <?php // $this->widget('CCaptcha'); ?>
    <?php // echo $form->textField($model, 'verifyCode');   ?>
            </div>
            <label class="hint">Masukkan huruf seperti yang tertera pada gambar di atas.
                <br/>Huruf tidak case-sensitive.</label>
        </div>
        <div class="form-actions">
            <?php
            $this->widget('booster.widgets.TbButton', array(
                'buttonType' => 'submit',
                'context' => 'primary',
                'icon' => 'fa fa-users',
                'label' => 'Register Mahasiswa',
            ));
            ?>
        </div>


        <?php $this->endWidget(); ?>

<?php else : ?>

        <div class="box-tools pull-right">
            <?php
            echo CHtml::link('<span class="fa fa-sign-in"></span> Logout', Yii::app()->createUrl('site/logout'));
            ?>
        </div>
        <?php echo Yii::app()->user->nama ?>
    <?php endif; ?>
    <?php
    $this->endWidget();
    ?>
</section>
<section class="col-lg-5 connectedSortable">
    <?php
    $this->renderPartial('//group/_listTable', array('list' => $data, 'sectionClass' => 5));
    ?>
</section>