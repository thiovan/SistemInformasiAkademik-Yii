<?php
/* @var $this MstMatakuliahController */
/* @var $model MstMatakuliah */

$this->breadcrumbs=array(
	'Mst Matakuliahs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MstMatakuliah', 'url'=>array('index')),
	array('label'=>'Create MstMatakuliah', 'url'=>array('create')),
	array('label'=>'Update MstMatakuliah', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MstMatakuliah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MstMatakuliah', 'url'=>array('admin')),
);
?>

<h1>View MstMatakuliah #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'matakuliah',
		'sks',
		'semester',
		'jenis',
	),
)); ?>
