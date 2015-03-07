<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_group')); ?>:</b>
	<?php echo CHtml::encode($data->nama_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->diskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_buat')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_buat); ?>
	<br />


</div>