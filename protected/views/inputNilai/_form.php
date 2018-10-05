<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'input-nilai-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mahasiswa_id'); ?>
		<?php echo $form->textField($model,'mahasiswa_id',
			array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'mahasiswa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai'); ?>
		<?php echo $form->textField($model,'nilai',
			array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'nilai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->