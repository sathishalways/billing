<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome/css/ionicons.min.css">
		<link href="<?php echo base_url(); ?>assets/js/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="<?php echo base_url(); ?>assets/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
		<link href="<?php echo base_url(); ?>assets/css/print.css" type="text/css" rel="stylesheet" media="print" />
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/addrow.js'></script>
		<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/addtable.js'></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

		<style>
	
			.btn-box-tool:active
			{
				background-color: rgb(5, 94, 135);  
		  
			}
			.side-nav.fixed a {
				display: block;
				padding: 0px 2px 0px 1px !important;
				color: #055E87;
			}
			.side-nav li ul li a {
				margin: 0px 1rem 0px 0rem !important;
			}
			/*.saturate {
				-webkit-filter: saturate(50);
				filter: saturate(50);
			}*/

			@media only screen and (min-width:240px) and (max-width:768px){
				.nav{
					display:none;
				}
				.navbar-toggle{
					display:none;
				}
				.right{
				float: none !important;
				position: relative !important;
				bottom: 0px !important;
				width: 134px !important;
				left: 60px;
				background: #303f9f;
				}
				.img-welcome {
					width: 25px;
					height: 25px;
					float: right !important;
					position: relative;
					right: 0px !important;
					top: 2px;
					/* border: 1px solid #ccc; */
				}
				ol, ul {
					margin-top: 0;
					margin-bottom: -24px !important;
				}
				
			}
			.bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
				background-color: #3e0963 !important;
			}
			.box-title{
				color:#6C217E;
			}
			/*header, footer {
				color: white;
				background: #DBD0E1 !important;
				 background-image: url(background.png);
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.51);
			} */
			/* Mega Menu New */

			.nav,
			.nav a,
			.nav ul,
			.nav li,
			.nav div,
			.nav form,
			.nav input {
				margin: 0;
				padding: 0;
				border: none;
				outline: none;
			}

			.nav a { text-decoration: none; }

			.nav li { list-style: none; }
			.nav {
				display: inline-block;
				position: relative;
				cursor: default;
				z-index: 500;
				left:80px;
				background: transparent;
			}

			.nav > li {
				display: block;
				float: left;
			}
			.nav > li > a {
				position: relative;
				display: block;
				z-index: 510;
				height: 54px;
				padding: 0 20px !important;
				line-height: 54px;

				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 13px;
				font-stretch: ultra-expanded;
				color: #ffffff;/*#522276*/
				text-shadow: 0 0 1px rgba(0,0,0,.35);

				/*background: #303f9f;
				border-left: 1px solid #303f9f;
				border-right: 1px solid #303f9f;*/

				-webkit-transition: all .3s ease;
				-moz-transition: all .3s ease;
				-o-transition: all .3s ease;
				-ms-transition: all .3s ease;
				transition: all .3s ease;
			}
			.nav > li:hover > a { /*background: #303f9f;*/ }

			.nav > li:first-child > a {
				border-radius: 3px 0 0 3px;
				border-left: none;
			}
			.nav > li.nav-search > form {
				position: relative;
				width: inherit;
				height: 54px;
				z-index: 510;
				border-left: 1px solid #4b4441;
			}
			.nav > li.nav-search input[type="text"] {
				display: block;
				float: left;
				width: 1px;
				height: 24px;
				padding: 15px 0;
				line-height: 24px;

				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 13px;
				color: #999999;
				text-shadow: 0 0 1px rgba(0,0,0,.35);

				background: #372f2b;

				-webkit-transition: all .3s ease 1s;
				-moz-transition: all .3s ease 1s;
				-o-transition: all .3s ease 1s;
				-ms-transition: all .3s ease 1s;
				transition: all .3s ease 1s;
			}

			.nav > li.nav-search input[type="text"]:focus { color: #fcfcfc; }

			.nav > li.nav-search input[type="text"]:focus,
			.nav > li.nav-search:hover input[type="text"] {
				width: 110px;
				padding: 15px 20px;

				-webkit-transition: all .3s ease .1s;
				-moz-transition: all .3s ease .1s;
				-o-transition: all .3s ease .1s;
				-ms-transition: all .3s ease .1s;
				transition: all .3s ease .1s;
			}
			.nav > li.nav-search input[type="submit"] {
				display: block;
				float: left;
				width: 20px;
				height: 54px;
				padding: 0 25px;
				cursor: pointer;

				background: #372f2b url(../img/search-icon.png) no-repeat center center;

				border-radius: 0 3px 3px 0;

				-webkit-transition: all .3s ease;
				-moz-transition: all .3s ease;
				-o-transition: all .3s ease;
				-ms-transition: all .3s ease;
				transition: all .3s ease;
			}

			.nav > li.nav-search input[type="submit"]:hover { background-color: #4b4441; }
			.nav > li > div#sales {
				position: fixed;
				display: block;
				width: auto;
				top: 54px;
				left: 270px;
				opacity: 0;
				visibility: hidden;
				overflow: hidden;
				background: #fff;
				border: 1px solid #2e3192;
				border-radius: 5px;
				-webkit-transition: all .3s ease .15s;
				-moz-transition: all .3s ease .15s;
				-o-transition: all .3s ease .15s;
				-ms-transition: all .3s ease .15s;
				transition: all .3s ease .15s;
			}
			.nav > li:hover > div#sales {
				opacity: 1;
				visibility: visible;
				overflow: visible;
			}
			.nav > li > div#sales:before {
			  content: "";
			  border-bottom: 15px solid #fff;
			  border-right: 17px solid transparent;
			  border-left: 17px solid transparent;
			  position: absolute;
			  top: -15px;
			  left: 50px;
			  z-index: 1001;
			}

			.nav > li > div#sales:after {
			  content: "";
			  border-bottom: 17px solid #ccc;
			  border-right: 19px solid transparent;
			  border-left: 19px solid transparent;
			  position: absolute;
			  top: -17px;
			  left: 48px;
			  z-index: 800;
			}
			
			.nav > li > div#service {
				position: fixed;
				display: block;
				width: auto;
				top: 54px;
				left: 365px;
				opacity: 0;
				visibility: hidden;
				overflow: hidden;
				background: #fff;
				border: 1px solid #2e3192;
				border-radius: 5px;
				-webkit-transition: all .3s ease .15s;
				-moz-transition: all .3s ease .15s;
				-o-transition: all .3s ease .15s;
				-ms-transition: all .3s ease .15s;
				transition: all .3s ease .15s;
			}
			.nav > li:hover > div#service {
				opacity: 1;
				visibility: visible;
				overflow: visible;
			}
			.nav > li > div#service:before {
			  content: "";
			  border-bottom: 15px solid #fff;
			  border-right: 17px solid transparent;
			  border-left: 17px solid transparent;
			  position: absolute;
			  top: -15px;
			  left: 50px;
			  z-index: 1001;
			}

			.nav > li > div#service:after {
			  content: "";
			  border-bottom: 17px solid #ccc;
			  border-right: 19px solid transparent;
			  border-left: 19px solid transparent;
			  position: absolute;
			  top: -17px;
			  left: 48px;
			  z-index: 800;
			}
			
			.nav > li > div#spare {
				position: fixed;
				display: block;
				width: auto;
				top: 54px;
				left: 465px;
				opacity: 0;
				visibility: hidden;
				overflow: hidden;
				background: #fff;
				border: 1px solid #2e3192;
				border-radius: 5px;
				-webkit-transition: all .3s ease .15s;
				-moz-transition: all .3s ease .15s;
				-o-transition: all .3s ease .15s;
				-ms-transition: all .3s ease .15s;
				transition: all .3s ease .15s;
			}
			.nav > li:hover > div#spare {
				opacity: 1;
				visibility: visible;
				overflow: visible;
			}
			
			.nav > li > div#spare:before {
			  content: "";
			  border-bottom: 15px solid #fff;
			  border-right: 17px solid transparent;
			  border-left: 17px solid transparent;
			  position: absolute;
			  top: -15px;
			  left: 50px;
			  z-index: 1001;
			}
			
			.nav > li:hover > div#spare:before {
			  content: "";
			  border-bottom: 15px solid #fff;
			  border-right: 17px solid transparent;
			  border-left: 17px solid transparent;
			  position: absolute;
			  top: -15px;
			  left: 50px;
			  z-index: 1001;
			}

			.nav > li > div#spare:after {
			  content: "";
			  border-bottom: 17px solid #ccc;
			  border-right: 19px solid transparent;
			  border-left: 19px solid transparent;
			  position: absolute;
			  top: -17px;
			  left: 48px;
			  z-index: 800;
			}
			
			.nav > li:hover > div#spare:after {
			  content: "";
			  border-bottom: 17px solid #ccc;
			  border-right: 19px solid transparent;
			  border-left: 19px solid transparent;
			  position: absolute;
			  top: -17px;
			  left: 48px;
			  z-index: 800;
			}
			
			.nav > li > div#master {
				position: fixed;
				display: block;
				width: auto;
				top: 54px;
				left: 560px;
				opacity: 0;
				visibility: hidden;
				overflow: hidden;
				background: #fff;
				border: 1px solid #2e3192;
				border-radius: 5px;
				-webkit-transition: all .3s ease .15s;
				-moz-transition: all .3s ease .15s;
				-o-transition: all .3s ease .15s;
				-ms-transition: all .3s ease .15s;
				transition: all .3s ease .15s;
			}
			.nav > li:hover > div#master {
				opacity: 1;
				visibility: visible;
				overflow: visible;
			}
			.nav > li > div#master:before {
			  content: "";
			  border-bottom: 15px solid #fff;
			  border-right: 17px solid transparent;
			  border-left: 17px solid transparent;
			  position: absolute;
			  top: -15px;
			  left: 50px;
			  z-index: 1001;
			}

			.nav > li > div#master:after {
			  content: "";
			  border-bottom: 17px solid #ccc;
			  border-right: 19px solid transparent;
			  border-left: 19px solid transparent;
			  position: absolute;
			  top: -17px;
			  left: 48px;
			  z-index: 800;
			}
			
			
			.nav > li > div#reports {
				position: fixed;
				display: block;
				width: auto;
				top: 54px;
				left: 650px;
				opacity: 0;
				visibility: hidden;
				overflow: hidden;
				background: #fff;
				border: 1px solid #2e3192;
				border-radius: 5px;
				-webkit-transition: all .3s ease .15s;
				-moz-transition: all .3s ease .15s;
				-o-transition: all .3s ease .15s;
				-ms-transition: all .3s ease .15s;
				transition: all .3s ease .15s;
			}
			.nav > li:hover > div#reports {
				opacity: 1;
				visibility: visible;
				overflow: visible;
			}
			.nav > li > div#reports:before {
			  content: "";
			  border-bottom: 15px solid #fff;
			  border-right: 17px solid transparent;
			  border-left: 17px solid transparent;
			  position: absolute;
			  top: -15px;
			  left: 50px;
			  z-index: 1001;
			}

			.nav > li > div#reports:after {
			  content: "";
			  border-bottom: 17px solid #ccc;
			  border-right: 19px solid transparent;
			  border-left: 19px solid transparent;
			  position: absolute;
			  top: -17px;
			  left: 48px;
			  z-index: 800;
			}
			
			
			.nav .nav-column {
			   float: left;
				width: auto;
				padding: 0px 5px;
			}

			.nav .nav-column h3 {
				margin: 20px 0 10px 0;
				line-height: 18px;
				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 13px;
				color: #6C217E;
				text-transform: uppercase;
			}

			.nav .nav-column h3.orange { color: #ff722b; }

			.nav .nav-column li a {
				display: block;
				line-height: 26px;
				font-family: Helvetica, Arial, sans-serif;
				font-weight: bold;
				font-size: 12px;
				color: #888888;
				text-decoration:none;
			}

			.nav .nav-column li a:hover { color: #666666; }
			.nav>li>a:hover, .nav>li>a:visited .nav>li>a:active, .nav>li>a:focus {
				color: #522276;
				background: #DBD0E1;
				z-index:1;
			}
			.divider{
				background-color: #967d58 !important;
			}
			.right {
				float: right !important;
				position: relative !important;
				right: 0px !important;
				top: -50px;
				background: transparent;
			}
			.right li > div a{
				color:#522276;
				font-size:1em;
			}
			.waves-block {
				display: block;
				color: #522276;
			}
			.waves-light{
				font-size:13px;
				font-weight:bold;
			}
			.right li > a i.fa-sign-out{
				font-size:16px !important;
			}
			.fa-arrows-alt{
				margin-right:10px;
			}
			a.waves-light:hover, a.waves-light:active, a.waves-light:focus {
				color: #fff !important;
			}
			header{
				padding:0 !important;
				height:55px;
			}
			.navbar-header {
				float: left;
				width: 223px !important;
			}
			.navbar-nav>li>a {
				padding-top: 10px;
				padding-bottom: 10px;
				line-height: 54px !important;
			}
			.btn-primary {
				background-color: #dbd0e1;
				border-color: #3e0963;
				color:#3e0963;
			}
			.btn-primary:hover {
				background-color: #dbd0e1;
				border-color: #3e0963;
				color:#3e0963;
			}
			.btn-primary:focus {
				background-color: #dbd0e1;
				border-color: #3e0963;
				color:#3e0963;
			}
			/* Responsive Menu Style */

			.navbar-toggle {
				position: relative;
				float: right;
				padding: 9px 10px;
				/* margin-top: 8px; */
				margin-right: 15px;
				margin-bottom: 8px;
				background-color: transparent;
				background-image: none;
				border: 1px solid transparent;
				border-radius: 4px;
				position: relative;
				bottom: 40px;
			}
			.navbar-toggle .icon-bar {
				display: block;
				width: 22px;
				height: 2px;
				border-radius: 1px;
				border:solid #fff;
			}
			.in .nav{
				left: 0px;
				position: relative;
				width: 415px;
			}
			.in .nav li{
				float: none;
				position: inherit;
				border-bottom: 1px solid #ccc;
			}
			.collapse.in {
				display: block;
				position: relative;
				z-index: 11;
				bottom: 50px;
				background: #fff;
				padding-left: 0px;
				height:auto;
			}

			.in .nav > li > div{
				z-index: 1111;
				width: 250px;
			}
			.in .nav .nav-column{
				float: none;
				width: 70%;
				padding: 0px 1.5%;
			}
			.in .nav .nav-column > ul{
				width: 244px;
			}
			.in .nav .nav-column > ul >li{
				border-bottom:none;
			}
			.in .nav .nav-column .divider{
				width:244px;
			}
			.in ul.right{
				float: none !important;
				position: relative !important;
				bottom: 0px !important;
				width: 413px;
				left: 0px;
				background: #303f9f;

			}
			.img-welcome{
				width:20px;
				height:20px;
				float:right;
				position:relative;
				left:22px;
				/*border:1px solid #ccc;*/
			}
			.in .right .img-welcome{
				width:25px;
				height:25px;
				position:relative;
				left: -260px;
				bottom: 0px;
				/*border:1px solid #ccc;*/
			}
			.fa
			{
				font-size:21px !important;
			}
			.fa-user
			{
				font-size: 2.4rem !important;
				padding-left: 3px;
			}
			#slide-out li a i
			{
				padding-left: 7px;
			}
			.fa-arrow-right
			{
				font-size:14px !important;
			}
			.coloricon{
				background-image:url("<?php echo base_url(); ?>assets/images/icon.png");
				height:25px;
				width:25px;
				background-repeat: no-repeat;
				background-size: cover;
				background-color: transparent;
				/*position:relative;
				left:1298px;*/
				position: relative;
				top: 20px;
			}
			.theme {
				height:25px;
				width:25px;
				background-repeat: no-repeat;
				background-size: cover;
				background-color: transparent;
				/*position:relative;
				left:1298px;*/
				position: relative;
				top: 20px;
			}
			.coloricon:hover {
				background-color: transparent !important;
				box-shadow: none !important;
			}
			/*.coloricon:active {
				background-color: transparent !important;
				box-shadow: none !important;
			}*/
			.coloricon:focus {
				background-color: transparent !important;
				box-shadow: none !important;
			}
			.color-picker {
				background: rgba(255, 255, 255, 0.75);
				/* padding: 10px; */
				border: 1px solid rgba(203, 203, 203, 0.6);
				border-radius: 2px;
				position: absolute;
				width: 160px;
				right: 95px;
				top: 50px;
				/*bottom: 510px;*/
			}
			.picker-wrapper {
				padding: 0px !important;
			}
			.color-picker > div {
				width: 15px !important;
				display: inline-block;
				height: 15px !important;
				margin: 2px !important;
				border-radius: inherit !important;
				opacity: 0.7;
			}

			.color-picker > div:before {
			  content: "";
			  border-left: 17px solid #fff;
			  border-top: 17px solid transparent;
			  border-bottom: 17px solid transparent;
			  position: absolute;
			  top: -1px;
			  right: -13px;
			  z-index: 1001;
			}
			.wrapper {
				min-height: 100%;
				position: static;
				overflow: inherit;
			}
			.color-picker > div:after {
			  content: "";
			  border-left: 17px solid #ccc;
			  border-top: 17px solid transparent;
			  border-bottom: 17px solid transparent;
			  position: absolute;
			  top: -1px;
			  right: -15px;
			  z-index: 800;
			}
			.btn-box-tool {
				padding: 5px;
				font-size: 12px;
				background: transparent;
				color: #000 !important;
				font-weight:bold;
			}

			.toggle-fullscreen:hover
			{
				color:white !important;
				text-decoration:none;
			}
			.toggle-fullscreen:focus
			{
				color:white !important;
				text-decoration:none;
			}
			.Accordion li.active a
			{
				color:black;
			}

			@media only screen and (max-width: 992px){
				.hide-on-med-and-down {
					display: block !important;
				}
				/*header .brand-logo img {
					width: 172px !important;
					position: relative;
					right: 75px;
					bottom: 8px;
				}*/
				.waves-effect {
					position: relative;
					left: 0px;
				}

				.sidebar-collapse {
					position: absolute;
					left: -170px;
					top: -70px;
				}
			}
			@media only screen and (min-width: 301px){
				nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
					height: 64px !important;
					line-height: 64px !important;
				}
			}
			.hide-on-med-and-down li {
				display: -webkit-inline-box;
			}
			
			.dropdown-menu>li>a {
				color: #111;/*#522276*/
				background: #ffffff;/*#f8efff*/
				margin: 2px 0px;
				padding: 5px 20px;
			}
			.dropdown-menu>li>a:hover {
				/*background-color: #dbd0e1;*/
				color: #336499 !important;
			}
			.btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open>.dropdown-toggle.btn-primary {
				color: #ffffff;/*#522276*/
				background-color: #111;/*#dbd0e1*/
				border-color: #333;/*#522276*/
			}
			.dropdown-menu {
				position: absolute;
				top: 100%;
				left: 0;
				z-index: 1000;
				display: none;
				float: left;
				min-width: 168px;
				padding: 0px 0;
				margin: 2px 0 0;
				font-size: 14px;
				text-align: left;
				list-style: none;
				background-color: #fff;
				-webkit-background-clip: padding-box;
				background-clip: padding-box;
				border: 1px solid #333;/*#522276*/
				/*border: 1px solid rgba(0,0,0,.15);*/
				border-radius: 4px;
				-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
				box-shadow: 0 6px 12px rgba(0,0,0,.175);
			}
		</style>
		<style>
			#header, thead {
				/*background: #336499;#dbd0e1*/
				background: #4971d6;/*#dbd0e1*/
				box-shadow: 0 0 10px #444;
			}
			h2 {
				color: #dbd0e1;
			}
		</style>
	</head>

	<body>
		<header id="header" class="page-topbar">
			<div class="navbar-header">
				<a href="<?php echo base_url(); ?>pages/dash" class="brand-logo darken-1" style="color:#FFFFFF">Fish Bills
					<!--<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="materialize logo" style="height: 45px;color:#fff;float:left;position:relative;left:30px;margin: 5px;" class="saturate">-->
				</a>
			</div>
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse js-navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>pages/dash">Home</a></li>
					<li><a href="<?php echo base_url(); ?>pages/bills">Bills</a></li>
					<li><a href="<?php echo base_url(); ?>pages/cust_list">Customers</a></li>
					<li><a href="<?php echo base_url(); ?>pages/prod_list">Products</a></li>
					<li><a href="<?php echo base_url(); ?>pages/prod_cat_list">Category</a></li>
					<li><a href="<?php echo base_url(); ?>pages/prod_subcat_list">Sub-Category</a></li>
				</ul>
			</div>


			<div class="navbar-header right">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Welcome<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>login/logout" class="waves-effect waves-block waves-light"><i class="fa fa-sign-out"></i> Logout</a></li>
						<!--<li><a href="#">JavaScript</a></li>-->
					</ul>
				</div>
			</div>	
    
		</header>
		
		<script>
			$(document).ready(function() {
				$("#bg").change(function() {
					$("#header,thead").css("background",$("#bg").val());
					$("h2").css("color",$("#bg").val());
				});
			});
		</script>