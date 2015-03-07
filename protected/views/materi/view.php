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

<!--<h1>View Materi #<?php // echo $model->id;           ?></h1>-->

<?php
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
            'value' => CHtml::link('<i class="badge bg-yellow fa fa-2x fa-edit "> </i>', Yii::app()->createUrl('//materi/update', array('id' => $data->id)), array('title' => 'Update')
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
?>
<br/>
