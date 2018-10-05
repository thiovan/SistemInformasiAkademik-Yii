<?php
/* @var $this MstMatakuliahController */
/* @var $model MstMatakuliah */

$this->breadcrumbs=array(
	'Tabel Matakuliah'=>array('index'),
	'Tambah data',
);

$this->menu=array(
	array('label'=>'Menampilkan Matakuliah', 'url'=>array('index')),
	array('label'=>'Pemeliharaan Matakuliah', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Tabel Matakuliah</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>