<?php
$this->breadcrumbs=array(
	'Tugases',
);

$this->menu=array(
array('label'=>'Create Tugas','url'=>array('create')),
array('label'=>'Manage Tugas','url'=>array('admin')),
);
?>

<h1>Tugases</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
