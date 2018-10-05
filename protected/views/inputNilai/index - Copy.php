<?php
/* @var $this InputNilaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Input Nilais',
);

$this->menu=array(
	array('label'=>'Create InputNilai', 'url'=>array('create')),
	array('label'=>'Manage InputNilai', 'url'=>array('admin')),
);
?>

<h1>Input Nilais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
