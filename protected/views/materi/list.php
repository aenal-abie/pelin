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
    ?>
    <br/>
    <?php
    $this->endWidget();
    ?>
    <?php
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
            <th> ' . CHtml::link(User::model()->imglist($dataProvider->user->user->avatar, $dataProvider->user->user->nama_lengkap, 1), Yii::app()->createUrl('//peserta/profileDosen', ['id' => $dataProvider->user_id])) . '<a class="pull-right"></a></th>            
           
            <th style="vertical-align: middle">Dosen</th>
        </tr>
        </tbody></table>';

    echo '<table class="table table-striped">
    <tbody>
        <tr>
            <th colspan="1">Daftar Peserta Group ini</th>
        </tr>';
    ?>
    <tr>
        <td style="width: 20px">
            <?php
            foreach ($peserta as $psr) :
                ?>

                <?php echo CHtml::link(User::model()->imglist($psr->user->user->avatar, $psr->user->user->nama_lengkap, 1), Yii::app()->createUrl('//peserta/profileMahasiswa', ['id' => $psr->user_id])) ?>
                <?php
            endforeach;
            ?>
        </td>
    </tr>
    <?= '</tbody></table>'; ?>

    <br/>
    <?php
    $this->endWidget();
    ?>



</section>