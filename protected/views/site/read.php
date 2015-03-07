<section class="col-lg-5 connectedSortable">
    <?php
    $this->renderPartial('//group/_listTable', array('list' => $list, 'sectionClass' => 5));
    ?>

</section>
<section class="col-lg-7 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => $info->judul,
        'sectionClass' => '7'));

//    if (Yii::app()->user->checkAccess('Mahasiswa') && !Yii::app()->user->checkAccess('Admin')) {
//        $this->renderPartial('//group/_yourGroup', array('list' => $yourGroup));
//    }
//    $this->renderPartial('//site/_pengumuman', array('data' => $data));
    echo $info->isi
    ?>
    <?php
    $this->endWidget();
    ?>

</section>