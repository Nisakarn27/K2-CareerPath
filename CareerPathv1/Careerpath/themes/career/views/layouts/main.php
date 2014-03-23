<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/form.css' )
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<style type="text/css">
  body {
	padding-top: 60px;
	padding-bottom: 40px;
  }
  .sidebar-nav {
	padding: 9px 0;
  }

	@media (max-width: 980px) {
		body{
			padding-top: 0px;
		}
	}
</style>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

			<center>
<img height='600px' width='1120px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/yii.jpg'></center>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo Yii::app()->homeURL; ?>"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
						//	array('label'=>'Webboard', 'url'=>array('/topic/index'),'visible'=>Yii::app()->user->isGuest,'visible'=>Yii::app()->user->isUser()),
							array('label'=>'Webboard', 'url'=>array('/topic/index'),'visible'=>Yii::app()->user->isGuest,),
							array('label'=>'Manage Webboard', 'url'=>array('/topic/admin'),'visible'=>Yii::app()->user->isAdmin()),
							array('label'=>'Management Company', 'url'=>array('/company/admin'),'visible'=>Yii::app()->user->isAdmin()),
							array('label'=>'Management User', 'url'=>array('/User/admin'),'visible'=>Yii::app()->user->isAdmin()),

							
							array('label'=>'Register', 'url'=>array('/site/register','visible'=>Yii::app()->user->isGuest)),
							array('label'=>'Search Company', 'url'=>array('/major/index','visible'=>Yii::app()->user->isGuest)),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
					<?php if(!Yii::app()->user->isGuest): ?>
					<p class="navbar-text pull-right">Last login date : <a href="#"><?php echo Yii::app()->session['last_login_date']?Yii::app()->session['last_login_date']:'Not set'; ?></a></p>
					<?php endif; ?>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

    <div class="container-fluid">
    	<div class="span1"></div>
		
    <div class="span10">
      <?php echo $content ?>
 </div>
    </div><!--/.fluid-container-->
    <hr>   <footer>
        <p>&copy; career <?php echo date('Y'); ?></p>
      </footer>
    
</body>
</html>
