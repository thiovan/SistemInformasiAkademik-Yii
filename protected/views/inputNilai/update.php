<?php
$this->breadcrumbs=array(
	'Input Nilais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InputNilai', 'url'=>array('index')),
	array('label'=>'Create InputNilai', 'url'=>array('create')),
	array('label'=>'View InputNilai', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InputNilai', 'url'=>array('admin')),
);
?>

<h1>Update InputNilai <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>