<?php
/* @var $this InputNilaiController */
/* @var $model InputNilai */

$this->breadcrumbs=array(
	'Input Nilais'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InputNilai', 'url'=>array('index')),
	array('label'=>'Create InputNilai', 'url'=>array('create')),
	array('label'=>'Update InputNilai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InputNilai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InputNilai', 'url'=>array('admin')),
);
?>

<h1>View InputNilai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'semester_id',
		'mahasiswa_id',
		'mkuliah_id',
		'nilai',
	),
)); ?>
