<?php
$this->breadcrumbs=array(
	'Pesertas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Peserta','url'=>array('index')),
array('label'=>'Create Peserta','url'=>array('create')),
array('label'=>'Update Peserta','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Peserta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Peserta','url'=>array('admin')),
);
?>

<h1>View Peserta #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'group_id',
		'user_id',
		'status',
),
)); ?>
