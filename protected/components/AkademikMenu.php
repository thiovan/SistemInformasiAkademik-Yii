<?php
Yii::import('zii.widgets.CPortlet');
class AkademikMenu extends CPortlet
{
		public $title ='Data Akademik';
		protected function renderContent()
		{
			$this->render('akademikMenu');
		}
}
