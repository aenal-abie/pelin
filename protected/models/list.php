<?php
$psr = Peserta::model()->isPeserta($id);
if (Yii::app()->user->isGuest) {
    $this->renderPartial('//materi/_join', array('id' => $id));
} elseif (!is_object($psr)) {
    $this->renderPartial('//materi/_join', array('id' => $id));
} elseif ($psr->status == 0) {
    $this->renderPartial('//materi/_join', array('join' => 0));
}
?>
<section class="col-lg-8 connectedSortable">
    <style>
        .list-view{
            margin-top: -50px;
        }
    </style>
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Pembelajaran',
        'sectionClass' => '8',
    ));
    echo $dataProvider->diskripsi;
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
//$this->widget('booster.widgets.TbListView', array(
//    'dataProvider' => $dataProvider,
//    'itemView' => 'view',
//));
    $this->endWidget();
    ?>

    <?php
//    $this->beginWidget('ext.Box', array(
//        'title' => 'Diskusi',
////        'cssBody' => 'no-padding',
//        'sectionClass' => '7',
//    ));
    ?>

    <?php
//    $this->endWidget();

    $co = 1;
    $psr = Peserta::model()->isPeserta($id);
    if (Yii::app()->user->isGuest) {
//        $this->renderPartial('//materi/_join', array('id' => $id));
        $co = 0;
    } else
    if (!is_object($psr)) {
//        $this->renderPartial('//materi/_join', array('id' => $id));
        $co = 0;
    } else
    if ($psr->status == 0) {
//        $this->renderPartial('//materi/_join', array('join' => 0));
        $co = 0;
    }


    $this->renderPartial('//materi/_chart', array('data' => $diskusi, 'model' => $model, 'comment' => $co));
    ?>




</section>
<section class="col-lg-4 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Daftar Anggota',
        'cssBody' => 'no-padding',
        'sectionClass' => '4',
    ));

    echo '<table class="table table-striped">
    <tbody>
        <tr>
            <th> ' . User::model()->imglist($dataProvider->user->user->avatar, $dataProvider->user->user->nama_lengkap, 1) . '<a class="pull-right"></a></th>            
            <th style="vertical-align: middle">' . $dataProvider->user->user->nama_lengkap . '</th>
            <th style="vertical-align: middle">Dosen</th>
        </tr>
        </tbody></table>';

    echo '<table class="table table-striped">
    <tbody>
        <tr>
            <th colspan="1">Daftar Peserta Group ini</th>
            <!--<th><span class="pull-right">Jurusan</span></th> -->
        </tr>';
    ?>
    <tr>
        <td style="width: 20px">
            <?php
            foreach ($peserta as $psr) :
                ?>
                <?php echo User::model()->imglist($psr->user->user->avatar, $psr->user->user->nama_lengkap, 1) ?>

        <!--       <td style="vertical-align: middle"><a title="<?php // echo $psr->user->user->username ?>" href="#"><?php echo $psr->user->user->nama_lengkap ?></a></td>
                            <td  style="vertical-align: middle">
                                <a class="pull-right"><?php // echo $psr->user->kodeNamaJurusan->nama_jurusan  ?></a>
                            </td>-->

                <?php
            endforeach;
            ?>
        </td>
    </tr>
    <?php
    echo '
</tbody></table>';

//
//foreach ($dataProvider->getData() as $data) {
//    $this->menu[] = array('label' => $data->materi, 'url' => array('view', 'id' => $data->id));
//}
//
////$this->menu = array(
//$this->menu[] = array('label' => '<i class = "fa fa-building-o"></i>Tambah Materi', 'url' => array('create'));
////    array('label' => 'Manage Materi', 'url' => array('admin')),
////);
    ?>
<!--<button class="btn btn-warning btn-sm dropdown-toggle pull-right" >Bergabung <i class="glyphicon glyphicon-forward"></i></button>-->
    <br/>
    <?php
//$this->widget('booster.widgets.TbListView', array(
//    'dataProvider' => $dataProvider,
//    'itemView' => 'view',
//));
    $this->endWidget();
    ?>



</section>