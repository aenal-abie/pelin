<?php
$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->user_id,
);

$this->menu=array(
array('label'=>'List Mahasiswa','url'=>array('index')),
array('label'=>'Create Mahasiswa','url'=>array('create')),
array('label'=>'Update Mahasiswa','url'=>array('update','id'=>$model->user_id)),
array('label'=>'Delete Mahasiswa','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Mahasiswa','url'=>array('admin')),
);
?>

<h1>View Mahasiswa #<?php echo $model->user_id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'user_id',
		'kode_nama_jurusan',
		'tgl_lahir',
		'photo',
),
)); ?>
