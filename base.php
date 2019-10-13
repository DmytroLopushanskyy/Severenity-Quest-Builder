<?php require_once 'ti.php' ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>SEVERENITY</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/severenity_logo.ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="css/dashboard.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>


</head>

<body class="admin">


	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">

		</div>
	</div>
	<!-- eof .modal -->

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="admin_contact_modal">
		<!-- <div class="ls with_padding"> -->
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<form class="with_padding contact-form" method="post" action="./">
					<div class="row">
						<div class="col-sm-12">
							<h3>Contact Severenity</h3>
							<div class="contact-form-name">
								<label for="name">Full Name
									<span class="required">*</span>
								</label>
								<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="contact-form-subject">
								<label for="subject">Subject
									<span class="required">*</span>
								</label>
								<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
							</div>
						</div>

						<div class="col-sm-12">

							<div class="contact-form-message">
								<label for="message">Message</label>
								<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
							</div>
						</div>

						<div class="col-sm-12 text-center">
							<div class="contact-form-submit">
								<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color1">Send Message</button>
								<button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button wide_button">Clear Form</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<div id="canvas">
	<div id="box_wrapper">
		<header class="page_header_side page_header_side_sticked ds">
			<div class="side_header_logo ds ms">
				<a href="./admin_index.html">
					<span class="logo_text margin_0">
						SEVERENITY
					</span>
				</a>
			</div>
			<span class="toggle_menu_side toggler_light header-slide">
				<span></span>
			</span>
			<div class="scrollbar-macosx">
				<div class="side_header_inner">

					<!-- user -->

			<div class="user-menu">


				<ul class="menu-click">
					<li>
						<a href="#" class="my_hover">
							<div class="media">
								<div class="media-left media-middle">
									<img src="images/team/01.png" alt="">
								</div>
								<div class="media-body media-middle my_hover_el">
									<h4>John Doe</h4>
									User

								</div>

							</div>
						</a>
						<ul>
							<li>
								<a href="profile.php">
									<i class="fa fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="profile_edit.php">
									<i class="fa fa-edit"></i>
									Edit Profile
								</a>
							</li>
							<li>
								<a href="login.html" id="logout">
									<i class="fa fa-sign-out"></i>
									Log Out
								</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>

					<!-- main side nav start -->
					<nav class="mainmenu_side_wrapper">
						<h3 class="dark_bg_color">Home</h3>
						<ul class="menu-click">
							<li>
								<a href="dashboard.php">
									<i class="fa fa-th-large"></i>
									Dashboard
								</a>

							</li>
						</ul>

						<h3 class="dark_bg_color">Create Quests</h3>
						<ul class="menu-click">
								<li>
									<a href="#">
										<i class="fa fa-user"></i>
										Simple
									</a>
									<ul>
										<li>
											<a href="distance.php">
												Distance
											</a>
										</li>
										<li>
											<a href="action_goal.php">
												action / goal
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="logic.html">
										<i class="fa fa-user"></i>
										Logic
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i>
										Series
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i>
										BigGame
									</a>
								<li>
							</ul>
							<h3 class="dark_bg_color">Quests INFO</h3>
							<ul class="menu-click">
								<li>
									<a href="my_quests.php">
										<i class="fa fa-file-text"></i>
										My quests
									</a>
								</li>
								<li>
									<a href="sales.php">
										<i class="fa fa-bar-chart"></i>
										Sales
									</a>
								</li>
								<li>
									<a href="quests_feedback.php">
										<i class="fa fa-comments"></i>
										Quests Feedback
									</a>
								</li>
							</ul>

							<h3 class="dark_bg_color">Settings</h3>
							<ul class="menu-click">
								<li>
									<a href="#">
										<i class="fa fa-table"></i>
										Severenity Plan
									</a>
								</li>
								<li>
									<a href="#"><!-- settings.html -->
										<i class="fa fa-cog"></i>
										Account Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-question"></i>
										How It Works
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-globe"></i>
										Change language
									</a>
									<ul>
										<li>
											<a href="#">
												English
											</a>
										</li>
										<li>
											<a href="#">
												Українська
											</a>
										</li>
										<li>
											<a href="#">
												Русский
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					<!-- eof main side nav -->

					<div class="with_padding grey text-center">
						You're
						<strong>GOLD</strong> Member
					</div>

				</div>
			</div>
		</header>

		<header class="page_header header_darkgrey affix pad">

				<div class="widget widget_search">
					<form method="get" class="searchform form-inline" action="./">
						<div class="form-group local_quest_form">
							<label class="screen-reader-text" for="widget-search-header">Search for:</label>
							<input id="widget-search-header" type="text" value="" name="search" class="form-control my_input" placeholder="Search">
						</div>
						<button type="submit" class="theme_button color1">Search</button>
					</form>
				</div>


				<div class="pull-right big-header-buttons">
					<ul class="inline-dropdown inline-block">


						<li class="dropdown header-notes-dropdown">
							<a class="header-button" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<i class="fa fa-bell-o grey"></i>
								<span class="header-button-text">Messages</span>
								<span class="header-dropdown-number">
									12
								</span>
							</a>

							<div class="dropdown-menu ls">
								<div class="dropdwon-menu-title with_background">
									<strong>12 Pending</strong> Notifications

									<div class="pull-right darklinks">
										<a href="#">View All</a>
									</div>

								</div>
								<ul class="list-unstyled">

									<li>
										<div class="media with_background">
											<div class="media-left media-middle">
												<div class="teaser_icon label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<span class="grey">
													Notification Text lorem ipsum
												</span>
												<span class="pull-right">Just Now</span>
											</div>
										</div>
									</li>
									<li>
										<div class="media with_background">
											<div class="media-left media-middle">
												<div class="teaser_icon label-info">
													<i class="fa fa-bullhorn"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<span class="grey">
													Notification Text lorem ipsum
												</span>
												<span class="pull-right">20 minutes</span>
											</div>
										</div>
									</li>

									<li>
										<div class="media with_background">
											<div class="media-left media-middle">
												<div class="teaser_icon label-danger">
													<i class="fa fa-bolt"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<span class="grey">
													Notification Text lorem ipsum
												</span>
												<span class="pull-right">1 hour</span>
											</div>
										</div>
									</li>

									<li>
										<div class="media with_background">
											<div class="media-left media-middle">
												<div class="teaser_icon label-success">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<span class="grey">
													Notification Text lorem ipsum
												</span>
												<span class="pull-right">3 hours</span>
											</div>
										</div>
									</li>

									<li>
										<div class="media with_background">
											<div class="media-left media-middle">
												<div class="teaser_icon label-warning">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<span class="grey">
													Notification Text lorem ipsum
												</span>
												<span class="pull-right">4 hours</span>
											</div>
										</div>
									</li>

									<li>
										<div class="media with_background">
											<div class="media-left media-middle">
												<div class="teaser_icon label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="media-body media-middle">
												<span class="grey">
													Notification Text lorem ipsum
												</span>
												<span class="pull-right">4 hours</span>
											</div>
										</div>
									</li>

								</ul>
							</div>
						</li>

						<!-- <li class="dropdown header-notes-dropdown">
							<a class="header-button" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<i class="fa fa-envelope-o grey"></i>
								<span class="header-button-text">Inbox</span>
								<span class="header-dropdown-number">
									8
								</span>
							</a>

							<div class="dropdown-menu ls">
								<div class="dropdwon-menu-title with_background">
									<strong>8 New</strong> Messages

									<div class="pull-right darklinks">
										<a href="#">View All</a>
									</div>

								</div>
								<ul class="list1 no-bullets no-top-border no-bottom-border">

									<li>
										<div class="media">
											<div class="media-left">
												<img src="images/team/01.jpg" alt="...">
											</div>
											<div class="media-body">
												<h5 class="media-heading">
													<a href="#">
													Alex Walker <span class="pull-right">23 feb at 11:36</span>
												</a>
												</h5>
												<div>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis.
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left">
												<img src="images/team/02.jpg" alt="...">
											</div>
											<div class="media-body">
												<h5 class="media-heading">
													<a href="#">
													Janet C. Donnalds <span class="pull-right">23 feb at 12:17</span>
												</a>
												</h5>
												<div>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor.
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="media">
											<div class="media-left">
												<img src="images/team/03.jpg" alt="...">
											</div>
											<div class="media-body">
												<h5 class="media-heading">
													<a href="#">
													Victoria Grow <span class="pull-right">23 feb at 16:44</span>
												</a>
												</h5>
												<div>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni.
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</li> -->

						<li class="dropdown header-notes-dropdown">
							<a class="header-button" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="add_quest">
									<i class="fa fa-plus grey"><span class="my_fa"> </span></i>
									<span class="header-button-text">Quests</span>
								</span>
							</a>
							<div class="dropdown-menu ls">

								<div class="dropdwon-menu-title with_background">
									Choose <strong>QUEST</strong> type you want to create:

								</div>

								<ul class="list-unstyled padding_small">

									<li>
										<p class="progress-bar-title grey">
											<a href="" class="black"><strong><i class="fa fa-arrow-right" aria-hidden="true"></i>
											 DISTANCE</strong></a>
										</p>
										
									</li>
									<li>
										<p class="progress-bar-title grey">
											<a href="" class="black"><strong><i class="fa fa-arrow-right" aria-hidden="true"></i>
											 COLLECT</strong></a>
										</p>
										
									</li>

									<li>
										<a href="" class="black"><strong><i class="fa fa-arrow-right" aria-hidden="true"></i>
										REBUS</strong>
									</p>
									</li>

									<li>
										<a href="" class="black"><strong><i class="fa fa-arrow-right" aria-hidden="true"></i>
										EXPLORATION</strong>
									</p>
									</li>

									<li>
										<a href="" class="black"><strong><i class="fa fa-arrow-right" aria-hidden="true"></i>
										AR QUEST</strong>
									</p>
									</li>
									<li>
										<a href="" class="black"><strong><i class="fa fa-arrow-right" aria-hidden="true"></i>
										CUSTOM</strong>
									</p>
									</li>

								</ul>

							</div>

						</li>


						<li class="dropdown visible-xs-inline-block">
							<a href="#" class="search_modal_button header-button">
								<i class="fa fa-search grey"></i>
								<span class="header-button-text">Search</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- eof .header_right_buttons -->
			</header>

		<?php emptyblock('content') ?>

		<section class="page_copyright ds darkblue_bg_color">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<p class="grey">&copy; Copyrights 2017</p>
					</div>
					<div class="col-sm-6 text-sm-right">
						<p class="grey">Last account activity <i class="fa fa-clock-o"></i> 52 mins ago</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>




	<!-- template init -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>

	<!-- dashboard libs -->

	<!-- events calendar -->
	<script src="js/admin/moment.min.js"></script>
	<script src="js/admin/fullcalendar.min.js"></script>
	<!-- range picker -->
	<script src="js/admin/daterangepicker.js"></script>

	<!-- charts -->
	<script src="js/admin/Chart.bundle.min.js"></script>
	<!-- vector map -->
	<script src="js/admin/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="js/admin/jquery-jvectormap-world-mill.js"></script>
	<!-- small charts -->
	<script src="js/admin/jquery.sparkline.min.js"></script>

	<!-- dashboard init -->
	<script src="js/admin.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

<script>
	
$(document).on('click', '.header-button', function(e){
	console.log('ddd')
	if ($(this).parent().hasClass('open')) {
		var open = true
	}
	$('.header-notes-dropdown').removeClass('open')
	if (open == true) {
		$(this).parent().addClass('open')
	}else{
		$(this).parent().removeClass('open')
	}
	
	$('.dropdown-backdrop').remove()
})


if ($(window).width() < 445) {
	console.log('1')
	$('.page_header_side').removeClass('active-slide-side-header')
}else{
	console.log('2')
	$('.page_header_side').addClass('active-slide-side-header')
}


</script>

<script>
	
// User Autentification

//var userId = Cookies.get('userID');
//var accessToken = Cookies.get('accessToken');
//
//if(userId && accessToken){
//	var decrypted = CryptoJS.AES.decrypt(userId, "SecretPassphrase");
//	userId = decrypted.toString(CryptoJS.enc.Utf8);
//
//	var decrypted2 = CryptoJS.AES.decrypt(accessToken, "SecretPassphrase2");
//	accessToken = decrypted2.toString(CryptoJS.enc.Utf8);
//}else{
//	window.location.href = 'login.html';
//}
//if(userId=='' || accessToken==''){
//	Cookies.remove('userID');
//	Cookies.remove('accessToken');
//	window.location.href = 'login.html';
//}
//console.log('https://graph.facebook.com/' + userId + '?accessToken=' + accessToken)
//$('.media .media-middle img').attr('src',"http://graph.facebook.com/" + userId + "/picture?type=square&width=300&height=300")


//$.ajax({
//  dataType: "json",
//  url: 'https://graph.facebook.com/' + userId + '?access_token=' + accessToken,
//  success: function(response){
//  	console.log(response)
//  	$('.media .media-body h4').text(response.name)
//  },
//  error: function(error){
//  	console.log('error!', error)
//  	window.location.href = 'login.html';
//  }
//});


</script>

<script>
	
$('#logout').click(function(){
	Cookies.remove('userID');
})

</script>

<script>
	
function loading() {
	$('body').css('opacity', '0.2')
	$('body').css('overflow', 'hidden')
	$('html').prepend('<img src="images/animated_spinner.gif" id="spinner">')
}
function loading_disappear(){
	$('body').css('opacity', '1')
	$('body').css('overflow', 'auto')
	$('#spinner').remove()
}

</script>

<?php emptyblock('custom_scripts') ?>

</body>

</html>





























