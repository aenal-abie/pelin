<section class="col-lg-5 connectedSortable">
    <?php
    $this->renderPartial('//group/_listTable', array('list' => $list, 'sectionClass' => 5));
    ?>

</section>
<section class="col-lg-7 connectedSortable">
    <?php
    if (Yii::app()->user->checkAccess('Mahasiswa') && !Yii::app()->user->checkAccess('Admin')) {
        $this->renderPartial('//group/_yourGroup', array('list' => $yourGroup));
    } else {
        $this->renderPartial('//site/_pengumuman', array('data' => $data));
    }
    ?>
</section>