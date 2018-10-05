<?php
/* @var $this TblJurusanController */
/* @var $model TblJurusan */

$this->breadcrumbs=array(
	'Tabel Jurusan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Menampilkan Jurusan', 'url'=>array('index')),
	array('label'=>'Pemeliharaan Jurusan', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Tabel Jurusan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>