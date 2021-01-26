<?php 
	session_start();
	if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
		header("Location: index.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin || Super Fashion</title>
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
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="productAction.php" enctype="multipart/form-data">
				<span class="login100-form-title p-b-37">
					Add Product
				</span>

				<div class="wrap-input100 validate-input m-b-20">
				<select class="input100" name="category">
					<option>Select Product Category</option>
					<option value="men">Mens</option>
					<option value="women">Womens</option>
					<option  value="kid">Kids</option>
					<option  value="fabric">Fabric</option>
				</select>
					<!-- <input class="input100" type="text" name="username" placeholder="username or email"> -->
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="file" name="image">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Submit
					</button>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
	<script type='text/javascript' src='file/wp-content/plugins/contact-form-7/includes/js/scripts7752.js?ver=5.2.1'></script>
	<script type='text/javascript' src='file/wp-content/plugins/stock-ticker/assets/js/jquery.webticker.min1f44.js?ver=2.2.0.1'></script>
	<script type='text/javascript' src='file/wp-content/plugins/stock-ticker/assets/js/jquery.stockticker.min128b.js?ver=3.1'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/accordion.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/menu.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4'></script>
	<script type='text/javascript'>
	('fetch' in window) || document.write('<script src="file/wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>');
	(document.contains) || document.write('<script src="file/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
	(window.DOMRect) || document.write('<script src="file/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min2e00.js?ver=3.42.0"></scr' + 'ipt>');
	(window.URL && window.URL.prototype && window.URLSearchParams) || document.write('<script src="file/wp-includes/js/dist/vendor/wp-polyfill-url.min5aed.js?ver=3.6.4"></scr' + 'ipt>');
	(window.FormData && window.FormData.prototype.keys) || document.write('<script src="file/wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>');
	(Element.prototype.matches && Element.prototype.closest) || document.write('<script src="file/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>');
	</script>
	<script type='text/javascript' src='file/wp-includes/js/dist/dom-ready.min8293.js?ver=91fc8f05178d5c6365aec778f840ae17'></script>
	<script type='text/javascript' src='file/wp-includes/js/dist/a11y.min2902.js?ver=45f739d280d1244f6cb498ed8f1bf042'></script>
	<script type='text/javascript'>
	/* <![CDATA[ */
	var uiAutocompleteL10n = {
		"noResults": "No results found.",
		"oneResult": "1 result found. Use up and down arrow keys to navigate.",
		"manyResults": "%d results found. Use up and down arrow keys to navigate.",
		"itemSelected": "Item selected."
	};
	/* ]]> */
	</script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/autocomplete.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/button.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript'>
	jQuery(document).ready(function(jQuery) {
		jQuery.datepicker.setDefaults({
			"closeText": "Close",
			"currentText": "Today",
			"monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			"monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			"nextText": "Next",
			"prevText": "Previous",
			"dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			"dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
			"dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
			"dateFormat": "MM d, yy",
			"firstDay": 1,
			"isRTL": false
		});
	});
	</script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/resizable.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/draggable.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/dialog.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/droppable.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/progressbar.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/selectable.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/sortable.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/spinner.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/tooltip.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/tabs.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-blind.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-bounce.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-clip.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-drop.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-explode.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-fade.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-fold.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-highlight.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-pulsate.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-size.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-scale.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-shake.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-slide.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/ui/effect-transfer.mine899.js?ver=1.11.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/doubletaptogo7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/modernizr.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.appear7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/counter7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/easypiechart7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/mixitup7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min52c7.js?ver=6.0.5'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.fitvids7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min52c7.js?ver=6.0.5'></script>
	<script type='text/javascript' src='file/wp-includes/js/mediaelement/mediaelement-and-player.minc270.js?ver=4.2.13-9993131'></script>
	<script type='text/javascript' src='file/wp-includes/js/mediaelement/mediaelement-migrate.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/mediaelement/wp-mediaelement.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/infinitescroll.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.waitforimages7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/jquery/jquery.form.min50fa.js?ver=4.2.1'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/waypoints.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jplayer.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/bootstrap.carousel7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/skrollr7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/Chart.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.easing.1.37263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/abstractBaseClass7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.countdown7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.multiscroll.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.justifiedGallery.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/bigtext7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.sticky-kit.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/owl.carousel.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/typed7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.carouFredSel-6.2.1.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/lemmon-slider.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.fullPage.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.mousewheel.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.touchSwipe.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min52c7.js?ver=6.0.5'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/packery-mode.pkgd.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.stretch7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/imagesloaded7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/rangeslider.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.event.move7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/jquery.twentytwenty7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/TweenLite.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/ScrollToPlugin.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/smoothPageScroll.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/default_dynamicc643.js?ver=1596358090'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/default.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/comment-reply.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min52c7.js?ver=6.0.5'></script>
	<script type='text/javascript' src='file/wp-content/themes/bridge/js/plugins/qode-like.min7263.js?ver=5.4.4'></script>
	<script type='text/javascript' src='file/wp-includes/js/wp-embed.min7263.js?ver=5.4.4'></script>
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