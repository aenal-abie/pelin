<?php
$co = 1;
$psr = Peserta::model()->isPeserta($group);
if (Yii::app()->user->isGuest) {
    $this->renderPartial('//materi/_join', array('id' => $group));
    $co = 0;
} elseif (!is_object($psr)) {
    $this->renderPartial('//materi/_join', array('id' => $group));
    $co = 0;
} elseif ($psr->status == 0) {
    $this->renderPartial('//materi/_join', array('join' => 0));
    $co = 0;
}
?>

<?php
$this->widget('bootstrap.widgets.TbAlert', array(
//    'block' => false, // display a larger alert block?
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

<section class="col-lg-8 connectedSortable">
    <?php
//    $this->beginWidget('ext.Box', array(
//        'title' => 'Diskusi',
////        'cssBody' => 'no-padding',
//        'sectionClass' => '7',
//    ));

    $this->renderPartial('//materi/_chart', array('data' => $diskusi, 'model' => $model, 'comment' => $co));
    ?>

    <?php
//    $this->endWidget();
    ?>
</section>
<section class="col-lg-4 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Diskripsi',
        'sectionClass' => '5',
    ));
    ?>

    <div class="alert alert-info alert-dismissable">
        <i class="glyphicon glyphicon-bell"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Tinjauan Materi</b> <p><?php echo $materi->diskripsi; ?></p>
    </div>

    <?php
    $this->endWidget();
    if (count($listTugas) > 0) :
        if ($co == 1) {
            $this->beginWidget('ext.Box', array(
                'title' => 'Tugas',
                'cssBody' => 'no-padding',
                'sectionClass' => '5',
            ));
            ?>
            <?php
            echo '<table class="table table-striped table-bordered">
        <tbody>';
            foreach ($listTugas as $tgs) :
//            $fileSize = File::model()->formatSizeUnits(filesize(realpath(Yii::app()->basePath . '/../file/materi') . DIRECTORY_SEPARATOR . $fl->file));
                ?>
                <tr>
                    <td><i class="fa fa-tasks"></i> <i class="badge pull-right bg-red"><?php echo $tgs->waktu_selesai ?></i><a  href="<?php echo Yii::app()->createUrl('//materi/tugas', array('id' => $tgs->id)) ?>"><?php echo $tgs->judul ?></a></td>
                </tr>
                <?php
            endforeach;
            echo '
            </tbody>
            </table>';
            $this->endWidget();
        }
    endif;
    //tugas jobs

    $this->beginWidget('ext.Box', array(
        'title' => 'Download File',
        'cssBody' => 'no-padding',
        'sectionClass' => '5',
    ));
    ?>
    <?php
    echo '<table class="table table-striped table-bordered">
    <tbody>';
    foreach ($listFile as $fl) :
        $file = realpath(Yii::app()->basePath . '/../file/materi') . DIRECTORY_SEPARATOR . $group . DIRECTORY_SEPARATOR . $fl->file;

        if (file_exists($file)) {
            $file = filesize($file);
        }

        $fileSize = File::model()->formatSizeUnits($file);
        ?>
        <tr>
            <?php if ($co == 1) : ?>
                <td><i class="badge pull-right"><?php echo $fileSize ?></i>
                    <a target="_blank" href="<?php echo Yii::app()->createUrl('//file/download', array('id' => $fl->id)) ?>">
                        <i class="glyphicon glyphicon-paperclip"></i> <?php echo $fl->file      ?></a></td>
                    <!--<a target="_blank" href="<?php // echo Yii::app()->baseUrl . '/file/materi/' . $fl->materi->group_id . '/' . $fl->file ?>">-->
            <!--<i class="glyphicon glyphicon-paperclip"></i> <?php // echo $fl->file ?></a>-->
                </td>
            <?php else : ?>
                <td><i class="badge pull-right"><?php echo $fileSize ?></i><a  href="#"><?php echo $fl->file ?></a></td>
                    <?php endif; ?>
        </tr>
        <?php
    endforeach;
    echo '
    </tbody>
    </table>';
    $this->endWidget();
    ?>
</section>

