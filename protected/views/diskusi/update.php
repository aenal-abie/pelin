<?php
$this->breadcrumbs=array(
	'Diskusis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Diskusi','url'=>array('index')),
	array('label'=>'Create Diskusi','url'=>array('create')),
	array('label'=>'View Diskusi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Diskusi','url'=>array('admin')),
	);
	?>

	<h1>Update Diskusi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>