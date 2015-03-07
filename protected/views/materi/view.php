<?php
//$this->breadcrumbs=array(
//	'Materis'=>array('index'),
//	$model->id,
//);
//
//$this->menu=array(
//array('label'=>'List Materi','url'=>array('index')),
//array('label'=>'Create Materi','url'=>array('create')),
//array('label'=>'Update Materi','url'=>array('update','id'=>$model->id)),
//array('label'=>'Delete Materi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Manage Materi','url'=>array('admin')),
//);
?>

<!--<h1>View Materi #<?php // echo $model->id;                                             ?></h1>-->

<?php
/* @var $data Materi */
$i = 0;
foreach ($datas as $data) :
    ?>
    <div class="panel box box-success">
        <div class="box-header">
            <div class="pull-right" style="margin-top: 10px; margin-right: 5px;">
                <?=
                CHtml::link('<span class="badge bg-yellow"><i class = "fa fa-edit "> </i></span>', Yii::app()->createUrl('//materi/update', array('id' => $data->id)), array('title' => 'Update')) . " ",
                CHtml::link('<span class="badge bg-green"><i class="fa fa-upload"> </i> </span>', Yii::app()->createUrl('//file/create', array('id' => $data->id, 'materi' => $data->group->id)), array('title' => 'File Pendukung')) . " ",
                CHtml::link('<span class="badge bg-orange "><i class="fa fa-suitcase"> </i></span>', Yii::app()->createUrl('//tugas/create', array('id' => $data->id, 'materi' => $data->group->id)), array('title' => 'Tugas')) . " ",
                CHtml::link('<span class="badge bg-red "><i class="fa fa-trash-o"> </i></span>', '#', array('title' => 'Delete',
                    'onclick' => 'js:bootbox.confirm("<h3>Hapus Data </h3><br/>Anda Yakin Akan menghapus materi ini?",
                function(confirmed){
                if(confirmed) {
                window.location = "' . Yii::app()->createUrl('//materi/delete', array('id' => $data->id, 'materi' => $data->group->id)) . '";
                }
                })'));
                ?>
            </div>
            <h4 class="box-title">
                <a title="Klik Untuk Detail" data-toggle="collapse" data-parent="#accordion" href="#collapse-ke<?= $i ?>" class="<?= ($i == 0) ? "collapsed" : "" ?>">
                    <?= $data->materi ?>
                </a>
            </h4>
        </div>
        <div id="collapse-ke<?= $i ?>" class="panel-collapse collapse" style="height: 0px;">
            <div class="box-body">
                <br/>
                <?= $data->diskripsi ?>
                <?=
                CHtml::link('<span class="badge bg-yellow"><i class = "fa fa-edit "> </i> Ubah Materi</span>', Yii::app()->createUrl('//materi/update', array('id' => $data->id)), array('title' => 'Update')) . " ",
                CHtml::link('<span class="badge bg-green"><i class="fa fa-upload"> </i> Upload File Pendukung</span>', Yii::app()->createUrl('//file/create', array('id' => $data->id, 'materi' => $data->group->id)), array('title' => 'File Pendukung')) . " ",
                CHtml::link('<span class="badge bg-orange "><i class="fa fa-suitcase"> </i> Buat Tugas</span>', Yii::app()->createUrl('//tugas/create', array('id' => $data->id, 'materi' => $data->group->id)), array('title' => 'Tugas')) . " ",
                CHtml::link('<span class="badge bg-red "><i class="fa fa-trash-o"> </i> Hapus Materi</span>', '#', array('title' => 'Delete',
                    'onclick' => 'js:bootbox.confirm("<h3>Hapus Data </h3><br/>Anda Yakin Akan menghapus materi ini?",
                function(confirmed){
                if(confirmed) {
                window.location = "' . Yii::app()->createUrl('//materi/delete', array('id' => $data->id, 'materi' => $data->group->id)) . '";
                }
                })'));
                ?>
            </div>
        </div>
    </div>

    <?php
    $i++;
endforeach;
?>
<?php
/*
  $this->widget('booster.widgets.TbDetailView', array(
  'data' => $data,
  'type' => 'bordered condensed striped',
  'attributes' => array(
  'materi',
  array(
  'name' => 'diskripsi',
  'type' => 'raw'
  ),
  array(
  'label' => 'Aksi::',
  'type' => 'raw',
  'visible' => Yii::app()->user->checkAccess('Dosen'),
  'value' => CHtml::link('<i class = "badge bg-yellow fa fa-2x fa-edit "> </i>', Yii::app()->createUrl('//materi/update', array('id' => $data->id)), array('title' => 'Update')
  ) . ""
  . " " . CHtml::link('<i class="badge bg-green fa fa-2x fa-upload"> </i>', Yii::app()->createUrl('//file/create', array('id' => $data->id, 'materi' => $data->group->id)), array('title' => 'File Pendukung'))
  . " " . CHtml::link('<i class="badge bg-orange fa fa-2x fa-suitcase"> </i>', Yii::app()->createUrl('//tugas/create', array('id' => $data->id, 'materi' => $data->group->id)), array('title' => 'Tugas'))
  . " " . CHtml::link('<i class="badge bg-red fa fa-2x fa-trash-o"> </i>', '#', array('title' => 'Delete',
  'onclick' => 'js:bootbox.confirm("<h3>Hapus Data </h3><br/>Anda Yakin Akan menghapus materi ini?",
  function(confirmed){
  if(confirmed) {
  window.location = "' . Yii::app()->createUrl('//materi/delete', array('id' => $data->id, 'materi' => $data->group->id)) . '";
  }
  })'
  )),
  ))));
 */
?>
<br/>
<style>
    .box .box-body{
        margin-top: -30px;
    }
</style>
