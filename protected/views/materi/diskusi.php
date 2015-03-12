<section class="col-lg-8 connectedSortable">
    <style>
        .list-view{
            margin-top: -50px;
        }
    </style>
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Panel Diskusi Dosen dan Mahasiswa',
        'sectionClass' => '8',
    ));

//
//foreach ($dataProvider->getData() as $data) {
//    $this->menu[] = array('label' => $data->materi, 'url' => array('view', 'id' => $data->id));
//}
//
////$this->menu = array(
//$this->menu[] = array('label' => '<i class="fa fa-building-o"></i>Tambah Materi', 'url' => array('create'));
////    array('label' => 'Manage Materi', 'url' => array('admin')),
////);
    ?>

<!--<button class="btn btn-warning btn-sm dropdown-toggle pull-right" >Bergabung <i class="glyphicon glyphicon-forward"></i></button>-->
    <br/>
    <?php
    $this->renderPartial('//materi/_chart', array('data' => $diskusi, 'model' => $model, 'comment' => 1));

    $this->endWidget();
    ?>

</section>

<section class="col-lg-4 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Anggota Group',
        'sectionClass' => '8',
        'cssBody' => 'no-padding',
    ));
//    $this->widget(
//            'booster.widgets.TbMenu', array(
//        'type' => 'list',
//        'encodeLabel' => FALSE,
//        'htmlOptions' => array('class' => 'sidebar-menu'),
//        'items' => $this->menu
//            )
//    );
    $this->renderPartial('//group/_listAnggota', array('anggota' => $anggota));
    ?>

    <?php
    $this->endWidget();
    ?>

</section>