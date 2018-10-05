<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<marquee><h4><b>SELAMAT DATANG, <?php echo strtoupper(Yii::app()->user->name); ?></b></h4></marquee>
<hr>

<div class="box">
	<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/matakuliah.png'; ?>" alt="matakuliah" width="60" height="60"/>
    <h3>Mata Kuliah</h3>
    </center>
    <hr>

	<table style="border:0px">
	  <tr>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('mstMatakuliah/create'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/create.png'; ?>" width="60" height="60"/>
				    <p>Tambah Mata Kuliah</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('mstMatakuliah'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/read.png'; ?>" width="60" height="60"/>
				    <p>Lihat Mata Kuliah</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('mstMatakuliah/admin'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/edit.png'; ?>" width="60" height="60"/>
				    <p>Pemeliharaan Mata Kuliah</p>
			    </center>
		    </a>
	    </th>

	    </tr>
	</table>

</div>


<div class="box">
<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/jurusan.png'; ?>" alt="matakuliah" width="60" height="60"/>
    <h3><center>Jurusan</center></h3>
    </center>
    <hr>

    	<table style="border:0px">
	  <tr>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblJurusan/create'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/create.png'; ?>" width="60" height="60"/>
				    <p>Tambah Jurusan</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblJurusan'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/read.png'; ?>" width="60" height="60"/>
				    <p>Lihat Jurusan</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblJurusan/admin'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/edit.png'; ?>" width="60" height="60"/>
				    <p>Pemeliharaan Jurusan</p>
			    </center>
		    </a>
	    </th>

	    </tr>
	</table>
</div>

<div class="box">
<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/semester.png'; ?>" alt="semester" width="60" height="60"/>
    <h3><center>Semester</center></h3>
    </center>
    <hr>

    	<table style="border:0px">
	  <tr>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblSemester/create'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/create.png'; ?>" width="60" height="60"/>
				    <p>Tambah Semester</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblSemester'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/read.png'; ?>" width="60" height="60"/>
				    <p>Lihat Semester</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblSemester/admin'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/edit.png'; ?>" width="60" height="60"/>
				    <p>Pemeliharaan Semester</p>
			    </center>
		    </a>
	    </th>

	    </tr>
	</table>
</div>

<div class="box">
<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/mahasiswa.png'; ?>" alt="mahasiswa" width="60" height="60"/>
    <h3><center>Mahasiswa</center></h3>
    </center>
    <hr>

    	<table style="border:0px">
	  <tr>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblMahasiswa/create'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/create.png'; ?>" width="60" height="60"/>
				    <p>Tambah Mahasiswa</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblMahasiswa'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/read.png'; ?>" width="60" height="60"/>
				    <p>Lihat Mahasiswa</p>
			    </center>
		    </a>
	    </th>

	    <th style="width:33%;">
		    <a href="<?php echo Yii::app()->createUrl('tblMahasiswa/admin'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/edit.png'; ?>" width="60" height="60"/>
				    <p>Pemeliharaan Mahasiswa</p>
			    </center>
		    </a>
	    </th>

	    </tr>
	</table>
</div>


<div class="box">
<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/khs.png'; ?>" alt="khs" width="60" height="60"/>
    <h3><center>KHS</center></h3>
    </center>
    <hr>

    	<table style="border:0px">
	  <tr>

	    <th width="100%">
		    <a href="<?php echo Yii::app()->createUrl('tblKhs'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/read.png'; ?>" width="60" height="60"/>
				    <p>Lihat KHS Mahasiswa</p>
			    </center>
		    </a>
	    </th>

	    </tr>
	</table>
</div>

<div class="box">
<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/khs.png'; ?>" alt="khs" width="60" height="60"/>
    <h3><center>KRS</center></h3>
    </center>
    <hr>

    	<table style="border:0px">
	  <tr>

	    <th width="100%">
		    <a href="<?php echo Yii::app()->createUrl('tblKrs'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/read.png'; ?>" width="60" height="60"/>
				    <p>Lihat KRS Mahasiswa</p>
			    </center>
		    </a>
	    </th>

	    </tr>
	</table>
</div>

<div class="box">
<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/nilai.png'; ?>" alt="nilai" width="60" height="60"/>
    <h3><center>Input Nilai</center></h3>
    </center>
    <hr>

    	<table style="border:0px">
	  <tr>

	    <th width="50%">
		    <a href="<?php echo Yii::app()->createUrl('inputNilai/index'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/create.png'; ?>" width="60" height="60"/>
				    <p>Input Nilai</p>
			    </center>
		    </a>
	    </th>

	    <th width="50%">
		    <a href="<?php echo Yii::app()->createUrl('inputNilai/admin'); ?>">
			    <center>
				    <img src="<?php echo Yii::app()->request->baseUrl.'/assets/edit.png'; ?>" width="60" height="60"/>
				    <p>Pemeliharaan Nilai</p>
			    </center>
		    </a>
	    </th>

	    </tr>
	</table>
</div>