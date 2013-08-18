<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <meta name="description" content="">
	  <meta name="viewport" content="width=device-width">
	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-overrides.css" />
	  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body>
	<div class="navbar navbar-top navbar-inverse">
	  <div class="navbar-inner">
	    <div class="container-fluid">
	      <a class="brand" href="#">Core Admin</a>
	
	      <!-- the new toggle buttons -->
	
	      <ul class="nav pull-right">
					<li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>
					<li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>
				</ul>
	
	      <div class="nav-collapse nav-collapse-top collapse">
	
	      	<ul class="nav full pull-right">
	      	  <li class="dropdown user-avatar">
					
	      	    <!-- the dropdown has a custom user-avatar class, this is the small avatar with the badge -->
					
	      	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      	      <span>
									<span>John Smith <i class="icon-caret-down"></i></span>
	      	        <span class="badge badge-dark-red">5</span>
	      	      </span>
	      	    </a>
					
	      	    <ul class="dropdown-menu">
					
	      	      <!-- the first element is the one with the big avatar, add a with-image class to it -->
					
	      	      <li class="with-image">
	      	        <div class="avatar">
	      	          <%= image_tag "avatars/avatar1.jpg" %>
	      	        </div>
	      	        <span>John Smith</span>
	      	      </li>
					
	      	      <li class="divider"></li>
					
	      	      <li><a href="#"><i class="icon-user"></i> <span>Profile</span></a></li>
	      	      <li><a href="#"><i class="icon-cog"></i> <span>Settings</span></a></li>
	      	      <li><a href="#"><i class="icon-envelope"></i> <span>Messages</span> <span class="label label-dark-red pull-right">5</span></a></li>
	      	      <li><a href="#"><i class="icon-off"></i> <span>Logout</span></a></li>
	      	    </ul>
	      	  </li>
	      	</ul>
	
	        <form class="navbar-search pull-right">
	          <input type="text" class="search-query animated" placeholder="Search">
	          <i class="icon-search"></i>
	        </form>
	
	        <ul class="nav pull-right">
	          <li class="active"><a href="#" title="Go home"><i class="icon-home"></i> Home</a></li>
	          <li><a href="#" title="Manage users"><i class="icon-user"></i> Users</a></li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Some link</a></li>
	              <li><a href="#">One more separated link</a></li>
	            </ul>
	          </li>
	
	
	        </ul>
	
				</div>
	
			</div>
		</div>
		</div>
		<?php echo $content; ?>
		<div id="footer"></div><!-- footer -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
   </body>
</html>
