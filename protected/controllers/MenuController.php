<?php

class MenuController extends Controller
{
	public $layout='column2';
	
	public function filters()
	{
		return array(
			'accessControl',
			);
	}
	
	public function action()
	{
		return array(
			array('allow',
			'actions'=>array('menu'),
			'users'=>array('admin'),
			),
			array('deny',
			'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$this->render('menu');
	}
	
}