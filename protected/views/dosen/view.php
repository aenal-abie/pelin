<?php
$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	$model->user_id,
);

$this->menu=array(
array('label'=>'List Dosen','url'=>array('index')),
array('label'=>'Create Dosen','url'=>array('create')),
array('label'=>'Update Dosen','url'=>array('update','id'=>$model->user_id)),
array('label'=>'Delete Dosen','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Dosen','url'=>array('admin')),
);
?>

<h1>View Dosen #<?php echo $model->user_id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'user_id',
		'tgl_lahir',
		'photo',
		'kode_nama_jurusan',
),
)); ?>
