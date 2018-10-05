<?php
/* @var $this InputNilaiController */
/* @var $model InputNilai */

$this->breadcrumbs=array(
	'Input Nilais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InputNilai', 'url'=>array('index')),
	array('label'=>'Manage InputNilai', 'url'=>array('admin')),
);
?>

<h1>Create InputNilai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>