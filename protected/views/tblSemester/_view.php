<?php
/* @var $this TblSemesterController */
/* @var $data TblSemester */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ta_semester')); ?>:</b>
	<?php echo CHtml::encode($data->ta_semester); ?>
	<br />


</div>