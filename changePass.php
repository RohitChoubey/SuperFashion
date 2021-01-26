<?php 
	session_start(); 
	require_once 'dbConfig.php'; 
	if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
		header("Location: index.php");
		exit();
	}

	if (count($_POST) > 0) {
	    $result = mysqli_query($db, "SELECT *from user");
	    $row = mysqli_fetch_array($result);
	    if ($_POST["currentPassword"] == $row["pass"]) {
	        mysqli_query($db, "UPDATE user set pass='" . $_POST["newPassword"] . "'");
	        $message = "Password Changed";
	    } else
	        $message = "Current Password is not correct";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password || Super Fashion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css" data-type="vc_custom-css">
	@media only screen and (max-width: 1024px) {
		.carousel.advanced_responsiveness .carousel-control {
			display: none;
		}
	}
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
	.vc_custom_1481557056628 {
		padding-top: 70px !important;
		padding-bottom: 19px !important;
	}
	
	.vc_custom_1481556947144 {
		padding-bottom: 103px !important;
	}
	
	.vc_custom_1472728134971 {
		padding-top: 77px !important;
		padding-bottom: 64px !important;
	}
	
	.vc_custom_1481534274629 {
		padding-bottom: 40px !important;
	}
	
	.vc_custom_1481556216373 {
		margin-top: -76px !important;
	}
	
	.vc_custom_1537798272497 {
		padding-left: 42px !important;
	}
	
	.vc_custom_1472736346660 {
		padding-top: 82px !important;
		padding-bottom: 96px !important;
	}
	
	.vc_custom_1473945552834 {
		padding-right: 5% !important;
		padding-left: 5% !important;
	}
	</style>
	<style type="text/css">
	img.wp-smiley,
	img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 .07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='file/wp-includes/css/dist/block-library/style.min7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='file/wp-content/plugins/contact-form-7/includes/css/styles7752.css?ver=5.2.1' type='text/css' media='all' />
	<link rel='stylesheet' id='stock-ticker-css' href='file/wp-content/plugins/stock-ticker/assets/css/stock-ticker128b.css?ver=3.1' type='text/css' media='all' />
	<link rel='stylesheet' id='stock-ticker-custom-css' href='file/wp-content/uploads/stock-ticker-custom128b.css?ver=3.1' type='text/css' media='all' />
	<link rel='stylesheet' id='mediaelement-css' href='file/wp-includes/js/mediaelement/mediaelementplayer-legacy.minc270.css?ver=4.2.13-9993131' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-mediaelement-css' href='file/wp-includes/js/mediaelement/wp-mediaelement.min7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-default-style-css' href='file/wp-content/themes/bridge/style7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-font_awesome-css' href='file/wp-content/themes/bridge/css/font-awesome/css/font-awesome.min7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-font_elegant-css' href='file/wp-content/themes/bridge/css/elegant-icons/style.min7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-linea_icons-css' href='file/wp-content/themes/bridge/css/linea-icons/style7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-qode-dripicons-css' href='file/wp-content/themes/bridge/css/dripicons/dripicons7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-stylesheet-css' href='file/wp-content/themes/bridge/css/stylesheet.min7263.css?ver=5.4.4' type='text/css' media='all' />
	<style id='bridge-stylesheet-inline-css' type='text/css'>
	.page-id-386.disabled_footer_top .footer_top_holder,
	.page-id-386.disabled_footer_bottom .footer_bottom_holder {
		display: none;
	}
	</style>
	<link rel='stylesheet' id='bridge-print-css' href='file/wp-content/themes/bridge/css/print7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-style-dynamic-css' href='file/wp-content/themes/bridge/css/style_dynamicc643.css?ver=1596358090' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-responsive-css' href='file/wp-content/themes/bridge/css/responsive.min7263.css?ver=5.4.4' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-style-dynamic-responsive-css' href='file/wp-content/themes/bridge/css/style_dynamic_responsivec643.css?ver=1596358090' type='text/css' media='all' />
	<style id='bridge-style-dynamic-responsive-inline-css' type='text/css'>
	/* Timeline Express */
	
	.cd-timeline-content h2 {
		font-size: 33px;
		line-height: 42px;
	}
	
	.q_icon_list .qode-ili-icon-holder {
		line-height: 51px;
		height: 51px;
		width: 51px;
	}
	
	.q_icon_list p {
		padding: 13px 0 0 66px;
	}
	
	.footer_top .widget_nav_menu ul li {
		padding: 0;
	}
	
	.footer_top a:hover {
		text-decoration: underline;
	}
	
	.wpcf7 form.wpcf7-form p {
		margin-bottom: 2px;
	}
	
	.footer_top h5 {
		margin: 0 0 11px;
	}
	
	.testimonials_c_holder .testimonial_content_inner {
		padding: 53px 45px 49px;
	}
	
	.testimonials_c_holder .testimonial_content_inner .testimonial_image_holder {
		margin-bottom: 28px;
	}
	
	.testimonial_star_holder .icon_star {
		font-size: 14px;
	}
	
	.testimonials_c_holder .testimonial_content_inner .testimonial_rating_holder {
		margin: 16px 0 20px;
	}
	
	.testimonials_c_holder .testimonial_content_inner .testimonial_author {
		margin-top: 36px;
	}
	
	.testimonials_c_holder .flex-control-nav li {
		width: 10px;
		height: 10px;
		margin: 0 2px;
	}
	
	.testimonials_c_holder .flex-control-nav li a {
		background-color: #b7b7b7;
	}
	
	.testimonials_c_holder .flex-control-nav {
		margin-top: 38px;
	}
	
	.qode_video_box .qode_video_image .qode_video_box_button_arrow {
		border-left: 18px solid #fff;
	}
	
	.qode_video_box .qode_video_image .qode_video_box_button {
		background-color: #99ccff;
	}
	
	.qode_video_box .qode_video_image:hover .qode_video_box_button {
		background-color: #6699cc;
	}
	
	nav.main_menu>ul>li.active>a>span:not(.plus) {
		position: relative;
		display: inline-block;
		vertical-align: middle;
		padding: 11px 23px;
		border-radius: 0;
		background-color: #99ccff;
	}
	
	header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a {
		opacity: 1;
	}
	
	nav.main_menu ul li.active a {
		padding: 0;
	}
	
	.header_top {
		height: 35px;
		line-height: 36px;
	}
	
	header .header_top .q_social_icon_holder {
		margin-top: -1px;
		width: 29px;
	}
	
	.header-widget.widget_nav_menu ul.menu li a {
		padding: 0px 0 0 26px;
	}
	
	.header-widget.widget_nav_menu {
		padding: 0 24px 0 0;
	}
	
	.carousel-inner p {
		margin: 0 0 4px;
	}
	
	.carousel-inner .slider_content .text .qbutton.white {
		margin-left: 8px;
	}
	
	.title.title_size_medium h1 {
		text-transform: none;
	}
	
	.q_list.circle ul>li:before {
		width: 5px;
		height: 5px;
		background-color: #023368;
	}
	
	.q_list.circle ul>li {
		margin: 0 0 9px;
		padding: 0 0 0 16px;
	}
	
	.q_list.circle ul>li:hover {
		text-decoration: underline;
	}
	
	.header-widget.widget_nav_menu ul.menu li a:hover {
		color: #6c8eb2 !important;
	}
	
	.portfolio_single .portfolio_container {
		margin-top: 24px;
	}
	
	@media only screen and (max-width: 768px) {
		.title.title_size_medium h1 {
			font-size: 59px;
			line-height: 60px;
			margin-bottom: 5px;
		}
	}
	
	@media only screen and (max-width: 600px) {
		.subtitle {
			display: none;
		}
		.title.title_size_medium h1 {
			font-size: 31px;
			line-height: 33px;
			margin-bottom: 0;
		}
	}
	</style>
	<link rel='stylesheet' id='js_composer_front-css' href='file/wp-content/plugins/js_composer/assets/css/js_composer.min52c7.css?ver=6.0.5' type='text/css' media='all' />
	<link rel='stylesheet' id='bridge-style-handle-google-fonts-css' href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic%7CCatamaran%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic%7CRoboto%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C300italic%2C400italic%2C700italic&amp;subset=latin%2Clatin-ext&amp;ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='childstyle-css' href='file/wp-content/themes/bridge-child/style7263.css?ver=5.4.4' type='text/css' media='all' />
	<script type='text/javascript' src='file/wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="file/xmlrpc0db0.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="file/wp-includes/wlwmanifest.xml" />
	<style type="text/css">
	.recentcomments a {
		display: inline !important;
		padding: 0 !important;
		margin: 0 !important;
	}
	</style>
	<style type="text/css" id="wp-custom-css">
	.datetitle {
		background: #263846;
		border-top: 3px solid #FA4616;
		padding: 15px;
		position: relative;
	}
	
	.highlightbox .hd {
		color: #fff;
		margin: 0 0 10px;
	}
	
	.evdate {
		float: left;
		font-size: 14px;
		color: #fff;
		width: 50%;
		border-right: 1px solid #658298;
	}
	
	.highlightbox .evdate p {
		color: #FA4616;
		font-size: 25px;
		padding: 0;
	}
	
	.evname {
		float: right;
		width: 50%;
	}
	
	.boxp {
		margin: -25px 8px;
		height: 75px;
	}
	
	.amt {
		text-align: center;
		font-size: 19px;
		background: #e5e4e4;
		padding: 20px 0;
		margin-top: 20px;
	}
	
	nav.main_menu > ul > li > a {
		padding: 0 18px;
	}
	</style>
</head>
<body>
	
	<?php include 'adminheader.php'; ?>
	<div class="container-login100" style="background-image: url('images/bg-01.jpg'); margin-top: 50px;">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">

			<form name="frmChange" class="login100-form validate-form" method="post" action="<?php $_PHP_SELF ?>" onSubmit="return validatePassword()">
				
				<span class="login100-form-title p-b-37">
					Change Password
				</span>
<div class="message" style="color:red;" ><b><?php if(isset($message)) { echo $message; } ?></b></div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Password">
					<input class="input100" type="text" name="currentPassword" placeholder="Enter Current Password">
					<span class="focus-input100" id="currentPassword"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="newPassword" placeholder="New Password">
					<span class="focus-input100" id="newPassword"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="confirmPassword" placeholder="Confirm Password">
					<span class="focus-input100" id="confirmPassword"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit">
						Update Password
					</button>
				</div>
			</form>

			
		</div>
	</div>
	
<script>
	function validatePassword() {
		var currentPassword,newPassword,confirmPassword,output = true;

		currentPassword = document.frmChange.currentPassword;
		newPassword = document.frmChange.newPassword;
		confirmPassword = document.frmChange.confirmPassword;

		if(!currentPassword.value) {
			currentPassword.focus();
			document.getElementById("currentPassword").innerHTML = "required";
			output = false;
		}
		else if(!newPassword.value) {
			newPassword.focus();
			document.getElementById("newPassword").innerHTML = "required";
			output = false;
		}
		else if(!confirmPassword.value) {
			confirmPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "required";
			output = false;
		}
		if(newPassword.value != confirmPassword.value) {
			newPassword.value="";
			confirmPassword.value="";
			newPassword.focus();
			document.getElementById("confirmPassword").innerHTML = "Not Same";
			output = false;
		} 	
		return output;
	}
</script>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>