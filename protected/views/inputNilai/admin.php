<?php
$this->breadcrumbs=array(
	'Input Nilais'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List InputNilai', 'url'=>array('index')),
	array('label'=>'Create InputNilai', 'url'=>array('create')),
);
?>

<h1>Input Nilai</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'input-nilai-grid',
	'dataProvider'=>$model->search($_GET['smt_id'],
								$_GET['mk_id']),
	'columns'=>array(
		array(
			'header'=>'NO',
			'value'=>'$this->grid->dataProvider->
							pagination->currentPage *
					  $this->grid->dataProvider->
					  		pagination->pageSize + ($row+1)',
			'htmlOptions'=>array('width'=>'3%',
			'style'=>'text-align:center'),
		),
		array(
			'name'=>'mahasiswa_id',
			'type'=>'raw',
			'header'=>'NIM',
			'value'=>'CHtml::encode($data->mahasiswa_id)',
			'htmlOptions'=>array('width'=>'10%'),
		),
		array(
			'name'=>'mkuliah_id',
			'type'=>'raw',
			'header'=>'NAMA',
			'value'=>'CHtml::encode($data->mahasiswa->nama)',
			'htmlOptions'=>array('width'=>'%0%'),
		),
		array(
			'name'=>'nilai',
			'type'=>'raw',
			'header'=>'NILAI',
			'value'=>'CHtml::encode($data->nilai)',
			'htmlOptions'=>array('width'=>'10%'),
		),
		array(
			'header'=>'UBAH',
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>
