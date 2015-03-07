<?php
$this->breadcrumbs = array(
    'Tugases' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

//	$this->menu=array(
//	array('label'=>'List Tugas','url'=>array('index')),
//	array('label'=>'Create Tugas','url'=>array('create')),
//	array('label'=>'View Tugas','url'=>array('view','id'=>$model->id)),
//	array('label'=>'Manage Tugas','url'=>array('admin')),
//	);
?>

<section class="col-lg-7 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'Diskripsi',
        'sectionClass' => '5',
    ));
    ?>
        <!--<h1>Update Tugas <?php echo $model->id; ?></h1>-->

    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
    <?php $this->endWidget(); ?>
</section>

<section class="col-lg-5 connectedSortable">
    <?php
    $this->beginWidget('ext.Box', array(
        'title' => 'File diupload mahasiswa',
        'cssBody' => 'no-padding',
        'sectionClass' => '5',
    ));
    ?>

    <?php
    echo '<table class="table table-striped table-bordered">
    <tbody>';
    foreach ($listTugas as $fl) :
        ?>
        <tr>
            <td><i class="pull-right badge bg-olive"><?php echo $fl->user->user->nama_lengkap ?>
                </i><a target="_blank" href="<?php echo Yii::app()->createUrl('//tugas/download/', array('id' => $fl->id)) ?>">
                    <i class="glyphicon glyphicon-paperclip"></i> <?php echo $fl->filename ?></a>
            </td>
        </tr>
        <?php
    endforeach;
    echo '
    </tbody>
    </table>';
    ?>


    <?php $this->endWidget();
    ?>
</section>