<?php
$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Mahasiswa','url'=>array('index')),
	array('label'=>'Create Mahasiswa','url'=>array('create')),
	array('label'=>'View Mahasiswa','url'=>array('view','id'=>$model->user_id)),
	array('label'=>'Manage Mahasiswa','url'=>array('admin')),
	);
	?>

	<h1>Update Mahasiswa <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>