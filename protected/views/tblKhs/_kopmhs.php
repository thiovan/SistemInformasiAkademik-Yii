<div class="form">
<?php
$this->widget('zii.widgets.CDetailView',array(
	'data'=>$nim,
    'attributes'=>array(
    array(
    	'label'=>'NIM',
        'type'=>'html',
        'value'=>$nim->mahasiswa_id,
        ),
    array(
    	'label'=>'Nama',
        'type'=>'html',
        'value'=>TblMahasiswa::model()->findByPk
        			($nim->mahasiswa_id)->nama,
        ),
    array(
    	'label'=>'Jurusan',
        'type'=>'html',
        'value'=>TblJurusan::model()->findByPk(
        			TblMahasiswa::model()->findByPk(
        			$nim->mahasiswa_id)->jurusan_id)->jurusan,
        ),
	), 
));
?>
</div>
        
