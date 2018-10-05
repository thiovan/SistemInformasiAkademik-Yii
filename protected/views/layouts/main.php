<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background-color: #6191bf;
background-image: -webkit-gradient(linear, left top, left bottom, from(#81a8cb), to(#cde6f9));
background-image: -webkit-linear-gradient(top, #81a8cb, #cde6f9);
background-image: -moz-linear-gradient(top, #81a8cb, #cde6f9);
background-image: -ms-linear-gradient(top, #81a8cb, #cde6f9);
background-image: -o-linear-gradient(top, #81a8cb, #cde6f9);
background-image: linear-gradient(top, #81a8cb, #cde6f9);">

<div class="container" id="page">
	

	<div id="header" style="background-image: url(<?php echo Yii::app()->request->baseUrl.'/assets/header.png'; ?>); background-size: 100% 200px;
    background-repeat: no-repeat;">
	<center><img src="<?php echo Yii::app()->request->baseUrl.'/assets/logopoli.png'; ?>" width="60" height="60" /></center>
		<div id="logo"><center><b>Portal Akademik</b><br>Politeknik Negeri Semarang</center></div>
		<br>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Menu', 'url'=>array('/site/page', 'view'=>'menu')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Thio Van Agusti.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
