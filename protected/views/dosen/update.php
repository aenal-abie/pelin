<?php
$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Dosen','url'=>array('index')),
	array('label'=>'Create Dosen','url'=>array('create')),
	array('label'=>'View Dosen','url'=>array('view','id'=>$model->user_id)),
	array('label'=>'Manage Dosen','url'=>array('admin')),
	);
	?>

	<h1>Update Dosen <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>