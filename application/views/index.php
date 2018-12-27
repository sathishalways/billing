<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PC</title>
<style>
/* Reset CSS */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
}
body {
	background: #e0ebeb/*url(<?php echo base_url(); ?>assets/images/purple-gradient.jpg)*//*#ac90b9*/;
	background-size: cover;
	
/*background: rgba(36,150,199,1);
background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(36,150,199,1) 57%, rgba(5,94,135,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(57%, rgba(36,150,199,1)), color-stop(100%, rgba(5,94,135,1)));
background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(36,150,199,1) 57%, rgba(5,94,135,1) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(36,150,199,1) 57%, rgba(5,94,135,1) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(36,150,199,1) 57%, rgba(5,94,135,1) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(36,150,199,1) 57%, rgba(5,94,135,1) 100%);*/
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#055e87', GradientType=0 );

	color: #000;
	font: 14px Arial;
	margin: 0 auto;
	padding: 0;
	position: relative;
}
h1{ font-size:28px;}
h2{ font-size:26px;}
h3{ font-size:18px;}
h4{ font-size:16px;}
h5{ font-size:14px;}
h6{ font-size:12px;}
h1,h2,h3,h4,h5,h6{ color:#563D64;}
small{ font-size:10px;}
b, strong{ font-weight:bold;}
a{ text-decoration: none; }
a:hover{ text-decoration: underline; }
.left { float:left; }
.right { float:right; }
.alignleft { float: left; margin-right: 15px; }
.alignright { float: right; margin-left: 15px; }
.clearfix:after,
form:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.container { margin: 12% auto; position: relative; width: auto; }

#content {

	background: #336499;/*#f9f9f9*/
	background-image: linear-gradient(to bottom right, #336499, #9fbedf, #336499); /*
	/*background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,0.9) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);*/
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
	/*-webkit-box-shadow: 0 1px 0 #fff inset;
	-moz-box-shadow: 0 1px 0 #fff inset;
	-ms-box-shadow: 0 1px 0 #fff inset;
	-o-box-shadow: 0 1px 0 #fff inset;
	box-shadow: 0 1px 0 #fff inset;*/
	border: 1px solid #777;/*#c4c6ca*/
	box-shadow: 0 0 10px #444;
	margin: 0 auto;
	padding: 25px 0 0;
	position: relative;
	text-align: center;
	text-shadow: 0 1px 0 #fff;
	max-width: 400px;
}
#content h1 {
	color: #7E7E7E;
	font: bold 25px Helvetica, Arial, sans-serif;
	letter-spacing: -0.05em;
	line-height: 20px;
	margin: 10px 0 30px;
}
#content h1:before,
#content h1:after {
	content: "";
	height: 1px;
	position: absolute;
	top: 10px;
	width: 27%;
}
/*#content h1:after {
	background: rgb(126,126,126);
	background: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
	background: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    right: 0;
}
#content h1:before {
	background: rgb(126,126,126);
	background: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
	background: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
	background: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    left: 0;
}*/
/*#content:after,
#content:before {
	background: #f9f9f9;
	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
	border: 1px solid #c4c6ca;
	content: "";
	display: block;
	height: 100%;
	left: -1px;
	position: absolute;
	width: auto;
}
#content:after {
	-webkit-transform: rotate(2deg);
	-moz-transform: rotate(2deg);
	-ms-transform: rotate(2deg);
	-o-transform: rotate(2deg);
	transform: rotate(2deg);
	top: 0;
	z-index: -1;
}
#content:before {
	-webkit-transform: rotate(-3deg);
	-moz-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	-o-transform: rotate(-3deg);
	transform: rotate(-3deg);
	top: 0;
	z-index: -2;
}*/
#content form { padding: 0 20px; position: relative }
#content form input[type="text"],
#content form input[type="password"] {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
	/*-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;*/
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	background: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
	border: 1px solid #c8c8c8;
	color: #777;
	font: 13px Helvetica, Arial, sans-serif;
	margin: 0 0 10px;
	padding: 15px 10px 15px 40px;
	width: 80%;
}
#content form input[type="text"]:focus,
#content form input[type="password"]:focus {
	/*-webkit-box-shadow: 0 0 2px #ed1c24 inset;
	-moz-box-shadow: 0 0 2px #ed1c24 inset;
	-ms-box-shadow: 0 0 2px #ed1c24 inset;
	-o-box-shadow: 0 0 2px #ed1c24 inset;
	box-shadow: 0 0 2px #ed1c24 inset;*/
	background-color: #fff;
	border: 1px solid #ed1c24;
	outline: none;
}
#username { background-position: 10px 10px !important }
#password { background-position: 10px -53px !important }
#content form input[type="submit"] {
	background: transparent -moz-linear-gradient(center top , #055E87 0%, #055E87 100%) repeat scroll 0% 0%;
border-radius: 30px;
box-shadow: inset 0px 1px 0px #999;/*#6c477d*/
border: 1px solid #ccc;/*#6c477d*/
color: #333;
cursor: pointer;
float: left;
font: bold 15px Helvetica,Arial,sans-serif;
height: 35px;
margin: 20px 0px 35px 15px;
position: relative;
text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5);
width: 120px;
}
#content form input[type="submit"]:hover {
	background: transparent -moz-linear-gradient(center top , #055E87 0%, #055E87 100%) repeat scroll 0% 0%;
}
#content form div a {
	color: #004a80;
    float: right;
    font-size: 12px;
    margin: 30px 15px 0 0;
    text-decoration: underline;
}
.button {
	background: rgb(247,249,250);
	background: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
	background: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	background: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	background: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	background: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 );
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	-o-border-radius: 0 0 5px 5px;
	-ms-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;
	border-top: 1px solid #CFD5D9;
	padding: 15px 0;
}
.button a {
	
	color: #7E7E7E;
	font-size: 17px;
	padding: 2px 0 2px 40px;
	text-decoration: none;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.button a:hover {
	background-position: 0 -135px;
	color: #00aeef;
}
.cyan {
    background-color: #ffffff !important;/*#6c477d*/
}
</style>
</head>
<body>
	<div class="container">
		<section id="content" class="col-xs-12">
		<?php if(! is_null($msg)) echo $msg; ?>
			 <form id="form1" name="form1" method="post" action="<?php echo base_url(); ?>login/process">

					<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="materialize logo" style="height:55px;color:#fff;float:left;position:relative;left:100px;padding-top: 20px;padding-bottom: 20px;" class="saturate">
				<div>
					<input type="text" placeholder="Email" required="" name="email" id="email" />
				</div>
				<div>
					<input type="password" placeholder="Password" required="" name="password" id="password" />
				</div>
				<div>
					<input name="submit" type="submit" value="Login" class="cyan"/>
					
				</div>
			</form><!-- form -->
			<!-- button
			<div class="button">
				<a href="#">Lost your password?</a>
			</div>-->
		</section><!-- content -->
	</div><!-- container -->
</body>
</html>