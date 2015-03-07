<?php
$this->breadcrumbs=array(
	'Diskusis'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Diskusi','url'=>array('index')),
array('label'=>'Create Diskusi','url'=>array('create')),
array('label'=>'Update Diskusi','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Diskusi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Diskusi','url'=>array('admin')),
);
?>

<h1>View Diskusi #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'pesan',
		'user_id',
		'group_id',
		'tgl_post',
),
)); ?>
