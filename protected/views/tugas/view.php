<?php
$this->breadcrumbs=array(
	'Tugases'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Tugas','url'=>array('index')),
array('label'=>'Create Tugas','url'=>array('create')),
array('label'=>'Update Tugas','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Tugas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Tugas','url'=>array('admin')),
);
?>

<h1>View Tugas #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'materi_id',
		'waktu_selesai',
		'diskripsi',
		'jenis',
),
)); ?>
