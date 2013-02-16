<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

#head {
	visibility: visible;
	height: 96px;
	width: 100%;
	left: 0px;
	top: 0px;
	right: 0px;	
	position: absolute;
}
#mnu {
	position: absolute;
	height: 54px;
	width: 100%;
	top: 96px;
	left: 0px;
	background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/bar-bg.png);
}
.header {
	left: 124px;
	top: 20px;
	bottom: 11px;
	position: absolute;
	height: 65px;
	width: 89px;
}
.main-content {
	font-family: Verdana, Geneva, sans-serif;
	position: absolute;
	width: 100%;
	left: 0px;
	height: 100%;
	right: 0px;
	top:150px;
}
</style>

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
</head>

<body>
<div id="head">
  <div class="header"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="89" height="65" alt="vrhiring.com" longdesc="http://www.vrhiring.com" /></div>
</div>
<div id="mnu"><div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div></div>
<div class="main-content">

	<?php echo $content; ?>

	<div class="clear"></div>
</div>
</body>
</html>
