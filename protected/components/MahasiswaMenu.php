<?php
Yii::import('zii.widgets.CPortlet');
class MahasiswaMenu extends CPortlet
{
	public $title ='Data Mahasiswa';
	protected function renderContent()
	{
			$this->render('mahasiswaMenu');
	}
}
