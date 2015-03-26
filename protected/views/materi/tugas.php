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
$selesai = $dtl->waktu_selesai > date('Y-m-d H:i:s');
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
    Yii::app()->clientScript->registerScript('upload', "
        $('.upload').click(function(){
            $('.materi-form').toggle();
                return false;
        });
        ");
    ?>
    <?php
    //    $this->beginWidget('ext.Box', array(
    //        'title' => 'Diskusi',
    ////        'cssBody' => 'no-padding',
    //        'sectionClass' => '7',
    //    ));
    ?>
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Upload File Tugas (<span style="color:red">Maximal 5 MB</span>)',
        'sectionClass' => '5',
    ));
    ?>
    <?php if ($dtl->file_pendukung != ''): ?>
        <?php $file = realpath(Yii::app()->basePath . '/../file/pendukung') . '/' . $dtl->id . '/' . $dtl->file_pendukung; ?>
        Silhakan download file di bawah  ini sebelum anda mengerjakan tugas. <br/> <a href="<?= Yii::app()->createUrl('tugas/downloadFile', array('id' => $dtl->id)) ?>" ><?= '<i class="fa fa-download"> </i> '. $dtl->file_pendukung  ?></a> <span class="badge pull-right"><?= File::model()->formatSizeUnits(filesize($file)) ?></span>
        <hr/>
    <?php endif; ?>
    <?php // echo date('Y-m-d H:i:s');  ?>
    <span class="pull-right  ">[ Hanya file jenis PDF, DOC, DOCX, ODF, ZIP, RAR,7Zip yang bisa anda Uplaod ]</span>
    <br/><br/>
    <?php echo $dtl->diskripsi ?>
    <?php if (!$tgs->isNewRecord) : ?>
        <span class="badge bg-red">Anda sudah upload tugas</span>&nbsp;&nbsp;
        <a  href="<?php echo Yii::app()->createUrl('//tugas/download', array('id' => $tgs->id)) ?>"
            class="badge bg-olive"><i class="fa fa-download"></i>  Download File</a>&nbsp;&nbsp;

                                                                                            <!--<a target="_blank" href="<?php // echo Yii::app()->baseUrl . '/file/tugas/' . $tgs->tugas_id . '/' . $tgs->filename                               ?>"-->
                                                                                                <!--class="badge bg-olive"><i class="fa fa-download"></i>  Download File</a>&nbsp;&nbsp;-->

                                                                                         <!--<a class="badge bg-aqua upload"><i class="fa fa-upload"></i> Upload Ulang</a>-->
        <br/><br/>
        <?php if ($selesai) : ?>
            <p class="small">
                Nb. Jika anda ingin upload ulang silahkan di Upload Kembali, Tugas yang dinilai hanya file yang diupload terakhir
            </p>
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($selesai) : ?>
        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'materi-form',
            'type' => 'inline',
            'enableAjaxValidation' => false,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
        ?>

        <br/>
        <?php echo $form->fileField($tgs, 'filename', array()); ?>
        <br/>
        <?php
        if ($selesai) :
            ?>
            <span class="pull-right badge bg-maroon" style="color:red; font-size: 14px">
                <?php
                $kini = new DateTime('now');
                $kemarin = new DateTime($dtl->waktu_selesai);
                echo 'Sisa Waktu : ' . $kemarin->diff($kini)->format('%a hari %h jam %i menit %s detik');
                ?>
            </span>
            <?php
        endif;
        ?>
        <br/>

        <div class="box-footer clearfix no-border">
            <!--<button type="submit"  class="btn btn-primary btn-sm pull-right"><i class="fa fa-upload"></i> Upload File</button>-->
            <?php
            $this->widget('booster.widgets.TbButton', array(
                'buttonType' => 'submit',
                'context' => 'primary',
                'icon' => 'fa fa-upload',
                'htmlOptions' => array('class' => 'btn btn-primary pull-right'),
                'label' => ' Upload File',
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    <?php endif; ?>
    <?php
    $this->endWidget();
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
                <td><i class="badge pull-right"><?php echo $fileSize ?></i> <a target="_blank" href="<?php echo Yii::app()->createUrl('//file/download', array('id' => $fl->id)) ?>">
                        <i class="glyphicon glyphicon-paperclip"></i> <?php echo $fl->file ?></a></td></td>
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

