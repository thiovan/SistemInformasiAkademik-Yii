<?php
$this->breadcrumbs=array(
	'Input Nilais',
);

$this->menu=array(
	array('label'=>'Create InputNilai', 'url'=>array('create')),
	array('label'=>'Manage InputNilai', 'url'=>array('admin')),
);
?>

<div class="wide form">
<?php $form=$this->beginWidget('CActiveForm',array(
		'id'=>'nilai-krs-form',
		'enableAjaxValidation'=>true,
)); ?>

<p class="note">Masukan Nilai</p>

<div class="row">
	<?php echo $form->labelEx($model,'semester_id'); ?>
    	<?php echo $form->dropDownList($model,'semester_id',
		CHtml::listData(TblSemester::model()->findAll(),
		'id','ta_semester'),array('prompt'=>'= Pilihan =',
		'style'=>'width:100px;')); ?>
    <?php echo $form->error($model,'semester_id'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'mkuliah_id'); ?>
    	<?php echo $form->dropDownList($model,'mkuliah_id',
		CHtml::listData(MstMatakuliah::model()->findAll(),
		'id','matakuliah'),array('prompt'=>'= Pilihan =',
		'style'=>'width:300px;')); ?>
    <?php echo $form->error($model,'mkuliah_id'); ?>
</div>

<div class="row-buttons">
	<?php echo CHtml::submitButton('Proses >>'); ?>
</div>

<?php $this->endWidget(); ?>
</div>
