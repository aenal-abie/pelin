<?php
$this->breadcrumbs=array(
	'Diskusis',
);

$this->menu=array(
array('label'=>'Create Diskusi','url'=>array('create')),
array('label'=>'Manage Diskusi','url'=>array('admin')),
);
?>

<h1>Diskusis</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
