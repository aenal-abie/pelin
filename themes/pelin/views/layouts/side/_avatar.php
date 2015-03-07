<div class="pull-left image">
    <?php // if (Yii::app()->user->checkAccess('Dosen')) : ?>
    <?php
    $data = Dosen::model()->login()->find();
//        $location = '';
    ?>
    <!--<img src="<?php // echo Yii::app()->baseUrl . "/file/profile/" . $data->photo; ?>" class="img-circle" alt="User Image" />-->
    <?php echo User::model()->imgProfile() ?>
    <?php // endif; ?>
</div>