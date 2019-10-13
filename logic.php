<?php
print_r($_GET);
if(!empty($_GET["action"])) echo "action is not empty";
if($_GET["action"]=='addNextPart') echo "action is addNextPart";
if(!empty($_GET["quest_id"])) echo "quest_id is not empty";
?>

<!DOCTYPE html>

<html class="no-js">

<head>
	<title>SEVERENITY</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/severenity_logo.ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="../styles/style.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/dashboard.css" class="color-switcher-link">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/bootstrap-colorpicker.css" rel="stylesheet">
	<link rel="stylesheet" href="navbar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/bootstrap-colorpicker.js"></script>
    

    <script src="html2canvas.js"></script>

    <script src="js/jquery.nice-select.js"></script>
    <link rel="stylesheet" href="css/nice-select.css">

    <link rel="stylesheet" href="css/jquery.ui.rotatable.css">
	<script src="js/jquery.ui.rotatable.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>

	<!-- <script src="js/compressed.js"></script> -->


</head>

<body class="admin">

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
							<h3>Contact Admin</h3>
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
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<header class="page_header_side page_header_side_sticked ds">
				<div class="side_header_logo ds ms" style="overflow: initial;">
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
											<a href="login.html">
												<i class="fa fa-sign-out"></i>
												Log Out
											</a>
										</li>
									</ul>
									<span class="activate_submenu"></span>
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
									<span class="activate_submenu"></span>
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
									<span class="activate_submenu"></span>
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
													New user registered
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
													New user registered
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
													Server overloaded
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
													New order
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
													Long database query
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
													New user registered
												</span>
												<span class="pull-right">4 hours</span>
											</div>
										</div>
									</li>

								</ul>
							</div>
						</li>

						<li class="dropdown header-notes-dropdown">
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
						</li>

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

			<section class="ls with_bottom_border">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<ol class="breadcrumb darklinks">
								<li>
									<a href="#">Home</a>
								</li>
								<li>
									<a class="non_hover">Create Quest</a>
								</li>
								<li class="active">Logic</li>
							</ol>
						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>

			<section class="ls" id="visible">
				<div class="distance_title warning_message none"></div>
				<div class="distance_title">Create Logic Quest</div>
				<form>
					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
							<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Title:</label>
					  		<span class="popuptext">Some text here</span>
						</div>
					    <input type="name" class="form-control title_input" name="title" placeholder="Enter Quest Title">
					</div>
					<div class="form-group local_quest_form p-b120 col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
					    	<label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Description:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <textarea type="name" class="form-control title_input textarea_input" name="description" placeholder="Enter Quest Description"></textarea> 
					</div>
					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center" id="title_image_part">
						<div class="popup">
					    	<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Title Image:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="file" name="file-6[]" id="file-6" class="inputfile inputfile-5 hidden" data-multiple-caption="{count} files selected" onchange="readURL(this);" />
						<label for="file-6" class="file_label">
						<img id="blah" class="none" src="#" alt="your image" />
						<figure class="figure_file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" ><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span></span></label>

					</div>

				    <div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row marg_top" align="center">
				    	<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Price:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="text" class="form-control title_input number_input" name="price" placeholder="Price">
					    <ul id="menu">
						  	<li class="active_option"><span>мон.</span></li>
						  	<li><span>$</span></li>
						  	<li><span>₴</span></li>
						</ul>
					</div>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
						<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Rating:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="text" class="form-control title_input number_input" name="rating" placeholder="+ Value">
					    <ul id="menu">
						  	<li class="active_option"><span>мон.</span></li>
						  	<li><span>$</span></li>
						  	<li><span>₴</span></li>
						</ul>
					</div>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
						<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Experience:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="text" class="form-control title_input number_input" name="experience" placeholder="+ Value">
					    <ul id="menu">
						  	<li class="active_option"><span>мон.</span></li>
						  	<li><span>$</span></li>
						  	<li><span>₴</span></li>
						</ul>
					</div>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
						<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Serenits:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="text" class="form-control title_input number_input" name="serenits" placeholder="+ Value">
					    <ul id="menu">
						  	<li class="active_option"><span>мон.</span></li>
						  	<li><span>$</span></li>
						  	<li><span>₴</span></li>
						</ul>
					</div>

					<div class="distance_title mtop float_left mleft mb40">Create part №<span class="part_num">1</span></div>	

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
							<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Title:</label>
					  		<span class="popuptext">Some text here</span>
						</div>
					    <input type="name" class="form-control title_input" name="title2" placeholder="Enter Part Title">
					</div>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
						<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Rating:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="text" class="form-control title_input number_input" name="rating2" placeholder="+ Value">
					    <ul id="menu">
						  	<li class="active_option"><span>мон.</span></li>
						  	<li><span>$</span></li>
						  	<li><span>₴</span></li>
						</ul>
					</div>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
						<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Experience:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="text" class="form-control title_input number_input" name="experience2" placeholder="+ Value">
					    <ul id="menu">
						  	<li class="active_option"><span>мон.</span></li>
						  	<li><span>$</span></li>
						  	<li><span>₴</span></li>
						</ul>
					</div>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
						<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Serenits:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="text" class="form-control title_input number_input" name="serenits2" placeholder="+ Value">
					    <ul id="menu">
						  	<li class="active_option"><span>мон.</span></li>
						  	<li><span>$</span></li>
						  	<li><span>₴</span></li>
						</ul>
					</div>
		
					<div class="distance_title bordered_section mtop float_left mleft" id="image_upload" id="fade_image_0">Add Image Content</div>
					<a href="#" class="float_left gotobtn theme_button color1 inverse image" id="open_builder">Open Online Image Builder</a>
					<div class="edit_tools float_left none image" id="fade_image_1">
						<select id="nice_select">
						  <option data-display="Canvas Size: 3 × 2">3 × 2</option>
						  <option data-display="Canvas Size: 1 × 1">1 × 1</option>
						  <option data-display="Canvas Size: 2 × 1">2 × 1</option>
						  <option data-display="Canvas Size: 5 × 2">5 × 2</option>
						</select>
						<button class="builder_btn" id="add_img"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add Image</button>
						<button class="builder_btn" id="add_text"><i class="fa fa-pencil" aria-hidden="true"></i> Add Textbox</button>
						<div id="colorpicker1" class="input-group colorpicker-component" title="Using input value">
						  <input type="text" class="form-control input-lg back_color" value="#ffffff"/>
						  <span class="input-group-addon"><i></i></span>
						</div>

						<button id="cancel_btn">Quit</button>
						<button id="btnSave">Save</button>
					</div>

					<div class="canvas_div float_left mbottom none image" id="fade_image_2">
						<div class="wrap_img image_draggable1 none">
							<img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-9/20429627_1918501131738523_4099807999573759335_n.jpg?oh=1caa18efbfe583ad7753da85b4c358be&oe=5AB96743" class="resizable_element1 none" style="height: 100px;">
						</div>
						<div id="dialog" title="Choose Image">
							<p class="label_name">Enter img url:</p>
						  	<input type="url" name="img_url" class="img_url">
						  	<button class="ok_btn">OK</button>
						  	<p class="label_name margin1010">or</p>
						  	<div class="upload_div">
							  	Upload Image
							  	<input type="file" name="img_file" class="img_file" id="img_file">
						  	</div>
						  	<br>
						  	
						</div>
						<div id="dialog2" title="TextBox">
							<!-- <div class="wrap_img image_draggable1 drag_input text_draggable ui-draggable ui-draggable-handle">
								<textarea class="resizable_text builder_input ui-resizable" rows="4" style="margin: 0px; resize: none; position: static; zoom: 1; display: block; height: 40px; width: 156px;"></textarea>
								<i class="fa fa-trash delete_img text_btn" aria-hidden="true"></i>
								<img class="eye_btn text_btn" src="images/layers.png">
								<i class="fa fa-search-plus font_up_btn" aria-hidden="true"></i>
								<i class="fa fa-search-minus font_down_btn" aria-hidden="true"></i>
								<input type="color" class="nice_color">

							</div> -->
							
							<input type="color" class="edit_icon color_icon_text">
							<select class="select_text_size">
							  <option>10</option>
							  <option>12</option>
							  <option>14</option>
							  <option>16</option>
							  <option>18</option>
							  <option selected="true">20</option>
							  <option>22</option>
							  <option>24</option>
							  <option>26</option>
							  <option>28</option>
							  <option>30</option>
							  <option>32</option>
							  <option>34</option>
							  <option>36</option>
							  <option>38</option>
							  <option>40</option>
							  <option>42</option>
							  <option>44</option>
							  <option>46</option>
							  <option>48</option>
							  <option>50</option>
							  <option>50</option>
							  <option>52</option>
							  <option>54</option>
							  <option>56</option>
							  <option>58</option>
							  <option>60</option>
							  <option>62</option>
							  <option>64</option>
							  <option>66</option>
							  <option>68</option>
							  <option>70</option>
							  <option>72</option>
							  <option>74</option>
							  <option>76</option>
							  <option>78</option>
							  <option>80</option>
							  <option>82</option>
							  <option>84</option>
							  <option>86</option>
							  <option>88</option>
							  <option>90</option>
							  <option>92</option>
							  <option>94</option>
							  <option>96</option>
							  <option>98</option>
							  <option>100</option>
							  <option>102</option>
							  <option>104</option>
							  <option>106</option>
							  <option>108</option>
							  <option>110</option>
							  <option>112</option>
							  <option>114</option>
							  <option>116</option>
							  <option>118</option>
							  <option>120</option>
							  <option>122</option>
							  <option>124</option>
							  <option>126</option>
							  <option>128</option>
							  <option>130</option>
							  <option>132</option>
							  <option>134</option>
							  <option>136</option>
							  <option>138</option>
							  <option>140</option>
							  <option>142</option>
							  <option>144</option>
							  <option>146</option>
							  <option>148</option>
							  <option>150</option>
							  <option>152</option>
							  <option>154</option>
							  <option>156</option>
							  <option>158</option>
							  <option>160</option>
							  <option>162</option>
							  <option>164</option>
							  <option>166</option>
							  <option>168</option>
							  <option>170</option>
							  <option>172</option>
							  <option>174</option>
							  <option>176</option>
							  <option>178</option>
							  <option>180</option>
							  <option>182</option>
							  <option>184</option>
							  <option>186</option>
							  <option>188</option>
							  <option>190</option>
							  <option>192</option>
							  <option>194</option>
							  <option>196</option>
							  <option>198</option>
							  <option>200</option>
							</select>
							<select id="font_family"> 
						        <option value="Arial">Arial</option>
						        <option value="Verdana">Verdana</option>
						        <option value="Impact">Impact</option>
						        <option value="Comic Sans MS">Comic Sans MS</option>
						    </select>
							<textarea class="add_text_textarea"></textarea>
						  	<div class="upload_div" id="text_ok">
							  	OK
						  	</div>
						  	<br>
						  	
						</div>

						<!-- <div class="wrap_img image_draggable1 drag_input text_draggable">
							<input class="resizable_text builder_input" >
						</div> -->

					</div>	
					<div class="form-group image local_quest_form col-md-6 col-xs-12 col-md-offset-3 block mt70" align="center" id="fade_image_3">
						<div class="popup">
					    	<label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Enter Image URL:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="name" class="form-control title_input" name="title" placeholder="Enter Image URL" id="input_image_url">
					</div>

					<div class="form-group image local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center" id="fade_image_4">
						<div class="popup">
					    	<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Upload Image:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    
						    
						<label for="file-6" class="file_label">
							<img src="images/upload.png" id="img_change">
							<input type="file" id="media_input_img" accept="image/*" />
							<div class="progress-bar-cloudinary" id="progress-bar">
						    	<div class="progress" id="progress"></div>
							</div>
						</label>


					</div>
					<div class="appended_canvas image" id="fade_image_5">
						<img src="" class="appended_canvas_img">
						<i class="fa fa-times-circle-o none" id="appended_canvas_close" aria-hidden="true"></i>
					</div>		
					<div class="distance_title mtop float_left bordered_section mleft" id="audio_title">Add Audio Content</div>

					<div class="form-group local_quest_form audio_content col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
					    	<label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Enter Audio URL:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="name" class="form-control title_input" name="title" placeholder="Enter Audio URL" id="input_audio_url">
					</div>
					<div class="form-group local_quest_form audio_content col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
					    	<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Upload Audio File:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    
						    
						<label for="file-6" class="file_label"><img src="images/upload.png" id="img_change"><input type="file" id="media_input" accept="audio/*" /></label>


					</div>
					<audio id="sound" class="none audio_content" controls></audio>

					<div class="distance_title mtop bordered_section float_left mleft" id="video_title">Add Video Content</div>

					<div class="form-group video_content local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
					    	<label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Enter Video URL:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <input type="name" class="form-control title_input" name="title" placeholder="Enter Video URL" id="input_video_url">
					</div>
					<div class="form-group video_content local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center" id="video_upload">
						<div class="popup">
					    	<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Upload Video File:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    
						    
							<label for="file-6" class="file_label"><img src="images/upload.png" id="img_change"><input type="file" id="media_input_video" accept="video/*" /></label>


					</div>
					<video controls id="video" class="none video_content">
					    Your browser does not support HTML5 video.
					</video>
						
					<div class="distance_title mtop float_left mleft" id="text_part">Add Text Content</div>	
					<div class="form-group local_quest_form p-b120 col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
					    	<label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Text Content:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    <textarea type="name" class="form-control title_input textarea_input" name="description" placeholder="Enter Some Text"></textarea> 
					</div>

					<!-- <div class="distance_title mtop float_left mleft">Add AR Content</div>
					<a href="#" class="float_left gotobtn theme_button color1 inverse" id="open_builder2">Open Online Image Builder</a>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 block" align="center">
						<div class="popup">
					    	<label for="title" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Upload Image:</label>
					    	<span class="popuptext">Some text here</span>
					    </div>
					    
						    
							<label for="file-6" class="file_label"><img src="images/upload" id="img_change"><input type="file" id="media_input_img" accept="image/*" /></label>


					</div>

					<div class="appended_canvas">
						<img src="" class="appended_canvas_img2">
						<i class="fa fa-times-circle-o none" id="appended_canvas_close" aria-hidden="true"></i>
					</div>	 -->


					<div class="distance_title mtop float_left mleft">Hints</div>
					<div class="hints_div">
						
					</div>
					<a href="#" class="float_left gotobtn theme_button color1 inverse mb40" id="add_hint">Add Hint (<span>3</span>)</a>	

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
						<div class="popup width50">
					    	<label for="description" class="title_head number_title"><i class="fa fa-question-circle" aria-hidden="true"></i>Code:</label>
					    	<span class="popuptext">Answer you expect to get</span>
					    </div>
					    <input type="text" class="form-control title_input number_input width50percent mb40" name="code" placeholder="Code">
					</div>

					<div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center">
					    <button class="create_quest_btn">Finish!</button>
					    <button class="create_quest_btn">Create next part!</button>
					</div>
					
					
    				
				</form>
			</section>
			<br><br><br>
			<!-- <section class="page_copyright ds darkblue_bg_color">
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
			</section> -->
			<!-- <section class="page_copyright ds darkblue_bg_color">
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
			</section> -->

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
<!-- wrappers for visual page editor and boxed version of template -->
<!-- <img src="" id="test_img"> -->

<div id="rotatescreen" class="none">
	<div>
		<img src="images/rotatedevice.png">
		<p>Rotate Your Device To Continue!</p>
	</div>
</div>


<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="cloudinary_upload.js"></script>

<script>
	
// User Autentification

var userId = Cookies.get('userID');
var accessToken = Cookies.get('accessToken');

if(userId && accessToken){
	var decrypted = CryptoJS.AES.decrypt(userId, "SecretPassphrase");
	userId = decrypted.toString(CryptoJS.enc.Utf8);

	var decrypted2 = CryptoJS.AES.decrypt(accessToken, "SecretPassphrase2");
	accessToken = decrypted2.toString(CryptoJS.enc.Utf8);
}else{
	window.location.href = 'login.html';
}
if(userId=='' || accessToken==''){
	Cookies.remove('userID');
	Cookies.remove('accessToken');
	window.location.href = 'login.html';
}
console.log('https://graph.facebook.com/' + userId + '?accessToken=' + accessToken)
$('.media .media-middle img').attr('src',"http://graph.facebook.com/" + userId + "/picture?type=square&width=300&height=300")


$.ajax({
  dataType: "json",
  url: 'https://graph.facebook.com/' + userId + '?access_token=' + accessToken,
  success: function(response){ 
  	console.log(response)
  	$('.media .media-body h4').text(response.name)
  }
});


</script>

<script>
	
$('.create_quest_btn').click(function(e){
	console.log($('#file-6').prop('files'))
	e.preventDefault()
	loading()
	console.log('started creating')
	var title = $('input[name="title"').val()
	var description = $('textarea[name="description"').val()
	var title_image = $('input[name="file-6[]"').val()
	var image_content = $('.appended_canvas_img').attr('src')
	console.log(image_content, 'info got')
	var audio_content = $('#sound').attr('src')
	var video_content = $('#video').attr('src')
	var text = $('textarea[name="description"').val()
	hints_price = []
	$('input[name="hint_price"').each(function(){ 
		hints_price.push($(this).val())
	})
	hints = []
	i=0
	b=0
	$('textarea[name="hint"').each(function(){ //"tips":[{"id":1,"description":"згадайте, де сьогодні все починалося","price":100}]
		i++
		hints.push({"id":i, "description": $(this).val(), "price": hints_price[b]})
		b++
	})
	var price = $('input[name="price"').val()
	var rating = $('input[name="rating"').val()
	var experience = $('input[name="experience"').val()
	var serenits = $('input[name="serenits"').val()
	var title2 = $('input[name="title2"').val()
	var rating2 = $('input[name="rating2"').val()
	var experience2 = $('input[name="experience2"').val()
	var serenits2 = $('input[name="serenits2"').val()

	console.log(title, description, text, hints, hints_price, price, rating, experience, serenits)

	if (title == '' || description == '' || file == '' || price == '' || rating == '' || serenits == '' || text == '' title2 == '' || rating2 == '' || serenits2 == '' || experience == '' || experience2 == '') {
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Fill out all required fields!')
		window.scrollTo(0,0);
		loading_disappear()
	}else if (!$.isNumeric(rating), !$.isNumeric(serenits), !$.isNumeric(rating2), !$.isNumeric(experience), !$.isNumeric(serenits2), !$.isNumeric(experience2), !$.isNumeric(price)) {
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Enter valid numeric values!')
		window.scrollTo(0,0);
		loading_disappear()
	}else{
		var status = $.Deferred();
		handleFilesfunc($('#file-6').prop('files'), status)

		if(image_content){
			media = image_content
			contentType = 'image'
		}else if(audio_content){
			media = audio_content
			contentType = 'audio'
		}else if(video_content){
			media = video_content
			contentType = 'video'
		}

		var media_status = $.Deferred();

		var xhr = new XMLHttpRequest();
		xhr.open('GET', media, true);
		console.log('XHR sent!')
		xhr.responseType = 'blob';
		xhr.onload = function(e) {
			console.log('XHR onloaded!')
		  if (this.status == 200) {
		  	console.log('If passed')
		    var myBlob = this.response;
		    window.media_file = new File([myBlob], 'media', {type: contentType, lastModified: Date.now()});
		    window.file_array = new Array();
		    file_array.push(window.media_file)
		    console.log('Blob data received!', window.media_file, window.file_array)
		    media_status.resolve();
		    
		  }
		};
		xhr.send()


		var status2 = $.Deferred();
		$.when(media_status).then(function() {
			console.log('trying to upload media', contentType)
			if (contentType == 'image'){
				handleImage(window.file_array, status2)
			}else if(contentType == 'audio'){
				console.log('AUDIO!')
				handleAudio(window.file_array, status2)
			}else if(contentType == 'video'){
				console.log('VIDEO!')
				handleAudio(window.file_array, status2)
			}
			
		})

		

		console.log('after handle')
		$.when(status, status2).then(function() {
			path_array = $('#blah').attr('src').split('/')
			title_path = path_array[path_array.length-2] + '/' +path_array[path_array.length-1]
			media_path = $('#blah').attr('path').split('/')
			media_path = media_path[media_path.length-2] + '/' +media_path[media_path.length-1]
			console.log('dooone', title_path, media_path, userId)
			
			console.log('sending ajax', experience, serenits)
			$.ajax({
		        url: 'https://severenity-teo.herokuapp.com/send/quest',
		        data: JSON.stringify(
		        {
		        	'quest': {
		        		'title': title, 
		        		'description': description,
		        		'type': 4, 
		        		'serenits': serenits, 
		        		'experience': experience, 
		        		'image': title_path, 
		        		'placeId': '', 
		        		'price': price,
		        		'rating': rating,
		        		'createdBy': userId,
		        		"localQuest" : {
					        "parts" : [ 
					            {
					                "id" : 1,
					                "placeId" : "",
					                "code" : code,
					                "title" : title2,
					                "image": media_path,
					                "description" : text,
					                "tips" : hints,
					                "expires" : null,
					                "serenits": serenits2,
					        		"experience" : experience2,
					                "rating" : rating2
					            }
							]
		        		}
		        	}
		        }, null, '\t'),
		        contentType: 'application/json;charset=UTF-8',
		        type: 'POST',
		        crossDomain: true,
		        dataType: 'json',
		        success: function(response) {
		            console.log(response)
		            setTimeout(function() {
					 	alert('Quest was succcessfully created! Congratulations!!!')
					}, 50);
		        },
		        error: function(error) {
		             console.log(error);
		        }
		  	});
			loading_disappear()
			
			$('input[name="title"').val('')
			$('textarea[name="description"').val('')
			$('input[name="file-6[]"').val(null)
			$('input[name="value"').val('')
			$('input[name="price"').val('')
			$('input[name="rating"').val('')
			$('input[name="experience"').val('')
			$('input[name="serenits"').val('')
		})
	}
	
})

</script>
<script>

var quantity = 0

$('#image_upload').on('click', function(e){
	var display = $('.image').css('display')
	console.log('display', display)

	if (display=='none' && quantity != 1){
		$('.image').css('display', 'block')
		$(this).css('marginBottom', 40)
		$(this).addClass('bordered_section_active')
		quantity = 1
	}else if (display =='none' && quantity == 1){
		alert('There can be only one additional type in Local Quest Part. Choose wisely from images/video/audio content! Collapse other content type part to open this menu!')
	}else{
		quantity = 0
		$('.image').css('display', 'none')
		$(this).css('marginBottom', -22)
		$(this).removeClass('bordered_section_active')
	}
});

$('#audio_title').on('click', function(e){
	var display = $('.audio_content').css('display')
	console.log('display', display)

	if (display=='none' && quantity != 1){
		$('.audio_content').css('display', 'block')
		$(this).css('marginBottom', 40)
		$(this).addClass('bordered_section_active')
		quantity = 1
	}else if (display =='none' && quantity == 1){
		alert('There can be only one additional type in Local Quest Part. Choose wisely from images/video/audio content! Collapse other content type part to open this menu!')
	}else{
		quantity = 0
		$('.audio_content').css('display', 'none')
		$(this).css('marginBottom', -22)
		$(this).removeClass('bordered_section_active')
	}
});

$('#video_title').on('click', function(e){
	var display = $('.video_content').css('display')
	console.log('display', display)

	if (display=='none' && quantity != 1){
		$('.video_content').css('display', 'block')
		$(this).css('marginBottom', 40)
		$(this).addClass('bordered_section_active')
		quantity = 1
	}else if (display =='none' && quantity == 1){
		alert('There can be only one additional type in Local Quest Part. Choose wisely from images/video/audio content! Collapse other content type part to open this menu!')
	}else{
		quantity = 0
		$('.video_content').css('display', 'none')
		$(this).css('marginBottom', -22)
		$(this).removeClass('bordered_section_active')
	}
});


$('#image_upload').on('mouseover', function(){
	$(this).addClass('bordered_section_active')
})
$('#image_upload').on('mouseleave', function(){
	$(this).removeClass('bordered_section_active')
})
$('#audio_title').on('mouseover', function(){
	$(this).addClass('bordered_section_active')
})
$('#audio_title').on('mouseleave', function(){
	$(this).removeClass('bordered_section_active')
})
$('#video_title').on('mouseover', function(){
	$(this).addClass('bordered_section_active')
})
$('#video_title').on('mouseleave', function(){
	$(this).removeClass('bordered_section_active')
})

	
// publish quest

// {
//           "quest": { 
//           	"description":"Quest description",
//            "title":"Some quest",
//            "type":4,
//            "credits":51,
//            "experience" : 1000,
//            "image":"[imagename]",
//            "placeId": "123qwer",
//            "localQuest" : {
//         "parts" : [ 
//             {
//                 "id" : 1,
//                 "placeId" : "ChIJ7aVi_HLdOkcRMNTaM_ZaBU8",
//                 "code" : "letstart",
//                 "title" : "Ви успішно зареєструвалися!",
//                 "description" : "І автоматично отримали перше завдання.",
//                 "tips" : [],
//                 "expires" : null,
//                 "credits":1,
//         		"experience" : 1,
//                 "rating" : 1
//             }, 
//             {
//                 "id" : 2,
//                 "placeId" : "ChIJJc6KjnLdOkcRLx8wTUWU_9Y",
//                 "code" : "severity+serenity",
//                 "title" : "А де ваше резюме?",
//                 "description" : "Зрештою, звичайне резюме і так би не було прийняте.",
//                 "tips" : [],
//                 "expires" : null,
//                 "credits":2,
//         		"experience" : 2,
//                 "rating" : 1
//             }
//            ]
//            }
//           }
//  }


</script>


<script>
	
$(window).ready(function(){
	if ($(window).width() < 445) {
		console.log('1')
		$('.toggle_menu_side').trigger('click')
	}else{
		console.log('2')
		$('.toggle_menu_side').trigger('click')
	}
})



</script>





<script>
	

$('.color_icon_text').on('change', function(e){ 
	var color = $(this).val()
	$('.add_text_textarea').css('color', color)
	console.log(color)
});

$('.select_text_size').on('change', function(e){ 
	var fontsize = $(this).val()
	console.log(fontsize)
	$('.add_text_textarea').css('font-size', fontsize + "px")
	$('.add_text_textarea').css('line-height', fontsize + "px")
});
$('#font_family').on('change', function(e){ 
	var fontfamily = $(this).val()
	console.log(fontfamily)
	$('.add_text_textarea').css('font-family', fontfamily)
});

</script>


<script>
	
$('#add_hint').click(function(e){
	e.preventDefault()
	var hints = $('.hints_div .local_quest_form').length
	if ( hints < 6){
		$('.hints_div').append('<div class="form-group local_quest_form p-b120 col-md-6 col-xs-12 col-md-offset-3 block" align="center"><div class="popup"><label for="description" class="title_head"><i class="fa fa-question-circle" aria-hidden="true"></i>Hint Text:</label><span class="popuptext">Some text here</span></div><textarea type="name" class="form-control title_input textarea_input" name="hint" placeholder="Enter Some Text"></textarea></div><div class="form-group local_quest_form col-md-6 col-xs-12 col-md-offset-3 flex_row" align="center"><div class="popup width50"><label for="description" class="title_head number_title"></label></div><input type="text" class="form-control title_input number_input" name="hint_price" placeholder="Hint Price"><ul id="menu"><li class="active_option"><span>мон.</span></li><li><span>$</span></li><li><span>₴</span></li></div>')
	}
	var hints_new = $('.hints_div .local_quest_form').length

	width = $(window).width()
	if (width < 380) {
		$('.flex_row').addClass('input_responsive')
	}

	$('#add_hint span').html(3 - hints_new / 2)
})

</script>

<script>
    function check(e,value){
    //Check Charater
        var unicode=e.charCode? e.charCode : e.keyCode;
        if (value.indexOf(".") != -1)if( unicode == 46 )return false;
        if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
    }
    function checkLength(){
    var fieldLength = document.getElementById('fsize_input').value.length;
    //Suppose u want 4 number of character
    if(fieldLength <= 3){
        return true;
    }
    else
    {
        var str = document.getElementById('fsize_input').value;
        str = str.substring(0, str.length - 1);
    document.getElementById('fsize_input').value = str;
    }
    }
</script>
<script>
	
$('#input_video_url').focusout(function(){
	$('#video').removeClass('none')
	var value = $(this).val()
	var sound = document.getElementById('video');
  sound.src = value

  sound.onend = function(e) {
    URL.revokeObjectURL(this.src);
  }
})

$(document).on("change", "#media_input_video", function(evt) {
	$('#input_video_url').val('')
	$('#video').removeClass('none')
  var $source = $('#video');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});

$('#input_audio_url').focusout(function(){
	$('#sound').removeClass('none')
	var value = $(this).val()
	var sound = document.getElementById('sound');
  var sound = document.getElementById('sound');
  sound.src = value

  sound.onend = function(e) {
    URL.revokeObjectURL(this.src);
  }
})

$(document).on("change", "#media_input_img", function(evt) {
	$('#input_image_url').val('')
	  $('.appended_canvas_img').attr('src', URL.createObjectURL(this.files[0]));
	  $('.appended_canvas_img').parent()[0].load();
});

$('#input_image_url').focusout(function(){
	var value = $(this).val()
	console.log(value)
	$('.appended_canvas_img').attr('src', value)

})

$(document).on('click', '#appended_canvas_close', function(e){
	$(this).parent().find('img').attr('src', '')
	$(this).parent().addClass('none')
});

media_input.onchange = function(e){
	$('#input_audio_url').val('')
	$('#sound').removeClass('none')
	$('#img_change').attr('src', 'images/upload_new.png')
  var sound = document.getElementById('sound');
  var sound = document.getElementById('sound');
  sound.src = URL.createObjectURL(this.files[0]);

  sound.onend = function(e) {
    URL.revokeObjectURL(this.src);
  }
}

</script>



<script>
$( function() {
    dialog = $( "#dialog" ).dialog({
    	autoOpen: false,
    	modal: true,
    	resizable: false,
    	draggable: false,
    });
});


function readURL3(input) {


    if (input.files[0]) {
    	
      	var reader = new FileReader();
     	reader.onload = function (e) {

      		return PasteImage (e.target.result)
      	}
      reader.readAsDataURL(input.files[0]);
    }
}

$(document).on('change', '#img_file', function(e){
    readURL3(this);
    
   	var $el = $('#img_file');
   	$el.wrap('<form>').closest('form').get(0).reset();
   	$el.unwrap();


});

$(document).on('click', '.ok_btn', function(e){
	$('.error_mess').each(function (){
		console.log('qwerty')
		$(this).closest('.error_mess').remove()
	});
	if($('.img_url').val() == ''){
		return $('#dialog').prepend('<p class="error_mess">*Fill out input or upload file</p>')
	}
	PasteImage ($('.img_url').val())

	$('.img_url').val('')
});



// color change

$('.back_color').on('change paste keyup', function(e){ 
	var color = $(this).val()
	$('.canvas_div').css('background-color', color)
	console.log(color)
});


$(document).on('change paste keyup', '.nice_color', function(e){ 

	var color = $(this).val()
	$('.builder_input').css('color', color)
	console.log(color)
});


</script>
<script>
	
// adding images and textboxes

$(document).on('click', '#add_img', function(e){ 
	dialog.dialog( "open" );
	$("body").css("overflow", "hidden");
	e.preventDefault();
});

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





function PasteImage (src){
	loading()
	
	$('body').append('<img src="" id="test_img">')


	$('#test_img').attr('src', src)

	$('#test_img').error(function() {
		window.error_mess = 'error'
		$('#test_img').remove()

   		$('.error_mess').each(function (){
			console.log('qwerty')
			$(this).closest('.error_mess').remove()
		});

		loading_disappear()
	  	return $('#dialog').prepend('<p class="error_mess">*Image does not exist or can not be displayed!</p>')
	});

	$('#test_img').load(function (){
		var width_canvas = $('.canvas_div').width() / 2
		var koef = width_canvas * $('#test_img').height() / $('#test_img').width()
		$('.canvas_div').append('<div class="wrap_img image_draggable1"><img src="'+ src +'" class="resizable_element1" style="width:'+ width_canvas +' !important"></div>');
		$('.canvas_div .resizable_element1:last-child').css('height', koef)

		console.log(koef)
		editability()

		var w = width_canvas / 2
		var h = $('#test_img').height() / 4 * $('#test_img').height() / $('#test_img').width()
	
    	$('.image_draggable1').rotatable({snap: true, rotationCenterOffset: {top: h, left: w}});
    	$('.canvas_div .image_draggable1').last().append('<i class="fa fa-trash delete_img" aria-hidden="true"></i><img class="eye_btn" src="images/layers.png">')

    	$('#test_img').remove()
    	dialog.dialog( "close" );
   		$("body").css("overflow", "auto");

   		$('.error_mess').each(function (){
			console.log('qwerty')
			$(this).closest('.error_mess').remove()
		});
		loading_disappear()
	});

	
}



$('.canvas_div .image_draggable1').first().addClass('gooaway')
function editability(){
	$( ".resizable_element1").resizable({
	});
	$( ".image_draggable1").draggable();

}
$( ".resizable_element1").resizable({
});
$( ".image_draggable1").draggable();

$('.image_draggable1').rotatable({snap: true, rotationCenterOffset: {top: 0, left: 0}});


$(document).on('click', '.delete_img', function(e){ 
	$(this).parent().remove()
});

$(document).on('click', '.eye_btn', function(e){ 
	var index = 0
	var el = $(this).parent().parent().find('.wrap_img')
	for (var i = 0; i <= $(this).parent().parent().find('.wrap_img').length - 1; i++) {
		if ($.isNumeric($(el[i]).css("z-index"))) {
			var index_cur = Number($(el[i]).css("z-index") )
			console.log(index_cur)
			if (index_cur > index) {
				index = Number($(el[i]).css("z-index"))
			}
		}
	}
	$(this).parent().css('z-index', index + 1)
});


$( function() {
    dialog2 = $( "#dialog2" ).dialog({
    	autoOpen: false,
    	modal: true,
    	resizable: false,
    	draggable: false,
    	width: "30%",
    });
});

$(document).on('click', '#add_text', function(e){ 
	dialog2.dialog( "open" );
	$("body").css("overflow", "hidden");
	e.preventDefault();

	// $('.canvas_div').append('<div class="wrap_img image_draggable1 drag_input text_draggable"><textarea class="resizable_text builder_input" rows="4"></textarea></div>');
	// editability_text()

	// // var this_color = $('.canvas_div .image_draggable1').append('<div><div id="colorpicker2" class="clas input-group colorpicker-component" title="Using input value"><input type="color" class="form-control input-lg text_color" value="#ffffff"/><span class="input-group-addon"><i></i></span></div></div>');
	// // $(this_color).colorpicker({
 // //    	useAlpha: false,
	// // });

 //    $('.image_draggable1').rotatable({snap: true, rotationCenterOffset: {top: 0, left: 0}});
 //    var this_el = $('.canvas_div .image_draggable1').last().append('<i class="fa fa-trash delete_img text_btn" aria-hidden="true"></i><img class="eye_btn text_btn" src="images/layers.png"></i><i class="fa fa-search-plus font_up_btn" aria-hidden="true"></i><i class="fa fa-search-minus font_down_btn" aria-hidden="true"></i><input type="color" class="nice_color">')
 //    console.log(this_el)
 //    $(this_el).find('.builder_input').css('height', '40px' , '!important')
	// $(this_el).find('.builder_input').parent().css('height', 40, '!important')
});

$(document).on('click', '#text_ok', function(e){ 
	if (!$(this).hasClass('edit_proccess')){
		dialog2.dialog( "close" );
		$("body").css("overflow", "auto");
		e.preventDefault();

		$('.canvas_div').append('<div class="wrap_img image_draggable1 drag_input text_draggable"><textarea class="resizable_text builder_input" rows="4"></textarea></div>');
		editability_text()

		// var this_color = $('.canvas_div .image_draggable1').append('<div><div id="colorpicker2" class="clas input-group colorpicker-component" title="Using input value"><input type="color" class="form-control input-lg text_color" value="#ffffff"/><span class="input-group-addon"><i></i></span></div></div>');
		// $(this_color).colorpicker({
	 //    	useAlpha: false,
		// });

	    $('.image_draggable1').rotatable({snap: true, rotationCenterOffset: {top: 0, left: 0}});
	    var this_el = $('.canvas_div .image_draggable1').last().append('<i class="fa fa-trash delete_img text_btn" aria-hidden="true"></i><img class="eye_btn text_btn" src="images/layers.png"></i><i class="fa fa-edit edit_text_btn" aria-hidden="true"></i>')
	    console.log(this_el)
	    $(this_el).find('.builder_input').css('height', '40px' , '!important')
		$(this_el).find('.builder_input').parent().css('height', 40, '!important')

		$(this_el).find('.builder_input').css('color', $('.color_icon_text').val())
		$(this_el).find('.builder_input').css('font-size', $('.select_text_size').val() + "px")
		$(this_el).find('.builder_input').css('line-height', $('.select_text_size').val() + "px")
		$(this_el).find('.builder_input').css('font-family', $('#font_family').val())
		$(this_el).find('.builder_input').val($('.add_text_textarea').val())

		$('.add_text_textarea').val('')
		$('#font_family').val('Arial')
		$('.select_text_size').val('20')
		$('.color_icon_text').val('#000000')

		$('.add_text_textarea').css('color', $('.color_icon_text').val())
		$('.add_text_textarea').css('font-size', $('.select_text_size').val() + "px")
		$('.add_text_textarea').css('line-height', $('.select_text_size').val() + "px")
		$('.add_text_textarea').css('font-family', $('#font_family').val())
	}
});

$(document).on('click', '.edit_proccess', function(e){ 
	dialog2.dialog( "close" );
	$("body").css("overflow", "auto");
	e.preventDefault();


    var this_el = $('.canvas_div .editing')
    console.log(this_el)
    $(this_el).find('.builder_input').css('height', '40px' , '!important')
	$(this_el).find('.builder_input').parent().css('height', 40, '!important')

	$(this_el).find('.builder_input').css('color', $('.color_icon_text').val())
	$(this_el).find('.builder_input').css('font-size', $('.select_text_size').val() + "px")
	$(this_el).find('.builder_input').css('line-height', $('.select_text_size').val() + "px")
	$(this_el).find('.builder_input').css('font-family', $('#font_family').val())
	$(this_el).find('.builder_input').val($('.add_text_textarea').val())

	$('.add_text_textarea').val('')
	$('#font_family').val('Arial')
	$('.select_text_size').val('20')
	$('.color_icon_text').val('#000000')

	$('.add_text_textarea').css('color', $('.color_icon_text').val())
	$('.add_text_textarea').css('font-size', $('.select_text_size').val() + "px")
	$('.add_text_textarea').css('line-height', $('.select_text_size').val() + "px")
	$('.add_text_textarea').css('font-family', $('#font_family').val())

	$('.canvas_div .image_draggable1').each(function(){
		$(this).removeClass('editing')
	})

	$('#dialog2 #text_ok').removeClass('edit_proccess')
});

$(document).on('click', '.ui-button.ui-widget.ui-state-default.ui-corner-all.ui-button-icon-only.ui-dialog-titlebar-close', function(e){

	$('.canvas_div .image_draggable1').each(function(){
		$(this).removeClass('editing')
	})

	$('#dialog2 #text_ok').removeClass('edit_proccess')

	$('.add_text_textarea').val('')
	$('#font_family').val('Arial')
	$('.select_text_size').val('20')
	$('.color_icon_text').val('#000000')

	$('.add_text_textarea').css('color', $('.color_icon_text').val())
	$('.add_text_textarea').css('font-size', $('.select_text_size').val() + "px")
	$('.add_text_textarea').css('line-height', $('.select_text_size').val() + "px")
	$('.add_text_textarea').css('font-family', $('#font_family').val())

});

$(document).on('click', '.edit_text_btn', function(e){ 
	dialog2.dialog( "open" );
	$("body").css("overflow", "auto");
	e.preventDefault();

	$(this).parent().addClass('editing')
	$('#dialog2 #text_ok').addClass('edit_proccess')

	this_el = $(this).parent().find('.builder_input')

	// converting RGB to HEX
	var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 

	//Function to convert rgb color to hex format
	function rgb2hex(rgb) {
	 rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	 return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
	}

	function hex(x) {
	  return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
	 }

	var hex = rgb2hex(this_el.css('color'))

	// end of converting

	console.log(hex, this_el.css('font-family').replace('"', '').replace('"', ''))

	$('.color_icon_text').val(hex)
	$('.select_text_size').val(this_el.css('font-size').replace('px', ''))
	$('.select_text_size').val(this_el.css('line-height').replace('px', ''))
	$('#font_family').val(this_el.css('font-family').replace('"', '').replace('"', ''))
	$('.add_text_textarea').val(this_el.val())
	
	$('.add_text_textarea').css('color', $('.color_icon_text').val())
	$('.add_text_textarea').css('font-size', $('.select_text_size').val() + "px")
	$('.add_text_textarea').css('line-height', $('.select_text_size').val() + "px")
	$('.add_text_textarea').css('font-family', $('#font_family').val())
});

function editability_text(){
	$( ".image_draggable1").draggable({
		cancel: '' //!very important!
	});
	$( ".resizable_text").resizable({
	});
}


$(document).on('dblclick', '.builder_input', function(e){ 
	$(this).focus()
});

$(document).on('click', '.font_up_btn', function(e){ 
	//$(this).parent().find('.resizable_text').resizable("destroy");

	var font_size = Number($(this).parent().find('.builder_input').css('font-size').slice(0,-2))

	$(this).parent().find('.builder_input').css('font-size', font_size + 2)
	$(this).parent().find('.builder_input').css('line-height', font_size + 2 + 'px')

	$(this).parent().find('.builder_input').css('padding-top', font_size - font_size * 0.8, 'important');

});
$(document).on('click', '.font_down_btn', function(e){ 
	//$(this).parent().find('.resizable_text').resizable("destroy");

	var font_size = Number($(this).parent().find('.builder_input').css('font-size').slice(0,-2))

	if (font_size > 30) {
		$(this).parent().find('.builder_input').css('font-size', font_size - 2)
		$(this).parent().find('.builder_input').css('height', font_size + font_size * 0.5, 'important')
		$(this).parent().find('.builder_input').parent().css('height', font_size + font_size * 0.5, 'important')
	}else if (font_size > 4) {
		$(this).parent().find('.builder_input').css('font-size', font_size - 2)
	}

});

</script>

<script>
	
// resizing canvas
$(document).ready(function() {
	resize_3_2()
});

$(window).resize(function() {
	var value = $('.nice-select .list .selected').attr('data-value')
	if (value == '3 × 2') {
		resize_3_2()
	}else if (value == '1 × 1'){
		resize_1_1()
	}else if (value == '2 × 1'){
		resize_2_1()
	}else if (value == '5 × 2'){
		resize_5_2()
	}
});

function resize_3_2 (){
	console.log(arguments.callee.toString());
	var screen_width = $( window ).width();
	var screen_height = $( window ).height() - 52;
	if (screen_width < 780) {
		screen_height = $( window ).height() - 104;
	}
	
	var img_height = screen_width / 3 * 2;
	if (img_height > screen_height) {
		img_height = screen_height
		img_width = screen_height / 2 * 3;
		$('.canvas_div').css('width', img_width)
	}
	$('.canvas_div').css('height', img_height)
}
$(document).on('click', '.nice-select .list li[data-value="3 × 2"]', function(e){ 
	resize_3_2()
});
$(document).on('click', '.nice-select .list li[data-value="1 × 1"]', function(e){ 
	resize_1_1()
});
$(document).on('click', '.nice-select .list li[data-value="2 × 1"]', function(e){ 
	resize_2_1()
});
$(document).on('click', '.nice-select .list li[data-value="5 × 2"]', function(e){ 
	resize_5_2()
});

function resize_1_1 (){
	console.log(arguments.callee.toString());
	var screen_width = $( window ).width();
	var screen_height = $( window ).height() - 52;
	if (screen_width < 780) {
		screen_height = $( window ).height() - 104;
	}

	$('.canvas_div').css('width', screen_height)
	$('.canvas_div').css('height', screen_height)
}

function resize_2_1 (){
	console.log(arguments.callee.toString());
	var screen_width = $( window ).width();
	var screen_height = $( window ).height() - 52;
	if (screen_width < 780) {
		screen_height = $( window ).height() - 104;
	}
	
	var img_height = screen_width / 2;
	if (img_height > screen_height) {
		img_height = screen_height
		img_width = screen_height * 2;
		$('.canvas_div').css('width', img_width)
	}else{
		$('.canvas_div').css('width', '100%')
	}

	$('.canvas_div').css('height', img_height)
}
function resize_5_2 (){
	console.log(arguments.callee.toString());
	var screen_width = $( window ).width();
	var screen_height = $( window ).height() - 52;
	if (screen_width < 780) {
		screen_height = $( window ).height() - 104;
	}
	
	var img_height = screen_width / 5 * 2;
	if (img_height > screen_height) {
		img_height = screen_height
		img_width = screen_height / 2 * 5;
		$('.canvas_div').css('width', img_width)
	}else{
		$('.canvas_div').css('width', '100%')
	}

	$('.canvas_div').css('height', img_height)
}

</script>

<script>




$(document).ready(function() {
  $('#nice_select').niceSelect();
});

$(function () {
    $('#colorpicker1').colorpicker({
    	useAlpha: false
	});
});

// $(function () {
//     $('#colorpicker2').colorpicker({
//     	useAlpha: false
// 	});
// });

$(window).resize(function(){
	if ($(window).width() > $(window).height() && $('#rotatescreen').hasClass('opened')) {
		$('#rotatescreen').addClass('none')
		$('#rotatescreen').removeClass('opened')
	}
	if ($(window).width() < $(window).height() && $( ".canvas_div" ).hasClass('opened')) {
		$('#rotatescreen').removeClass('none')
		$('#rotatescreen').addClass('opened')
	}
})
$(function() { 
    $("#open_builder2").click(function(e) {
    	console.log($('.edit_tools').length)

    	if ($('.edit_tools').length > 0) {
    		$('.edit_tools').remove()
    		$('.canvas_div').remove()
    	}
    	$( "#open_builder2" ).after( '<div class="edit_tools float_left none"><select id="nice_select"> <option data-display="Canvas Size: 3 × 2">3 × 2</option> <option data-display="Canvas Size: 1 × 1">1 × 1</option> <option data-display="Canvas Size: 2 × 1">2 × 1</option> <option data-display="Canvas Size: 5 × 2">5 × 2</option></select><button class="builder_btn" id="add_img"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add Image</button><button class="builder_btn" id="add_text"><i class="fa fa-pencil" aria-hidden="true"></i> Add Textbox</button><div id="colorpicker1" class="input-group colorpicker-component" title="Using input value"> <input type="text" class="form-control input-lg back_color" value="#ffffff"/> <span class="input-group-addon"><i></i></span></div><button id="cancel_btn">Quit</button><button id="btnSave2">Save</button></div><div class="canvas_div float_left mbottom none"><div class="wrap_img image_draggable1 none"><img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-9/20429627_1918501131738523_4099807999573759335_n.jpg?oh=1caa18efbfe583ad7753da85b4c358be&oe=5AB96743" class="resizable_element1 none" style="height: 100px;"></div><div id="dialog" title="Choose Image"><p class="label_name">Enter img url:</p><input type="url" name="img_url" class="img_url"> <button class="ok_btn">OK</button> <p class="label_name margin1010">or</p><div class="upload_div"> Upload Image <input type="file" name="img_file" class="img_file" id="img_file"> </div><br></div><div id="dialog2" title="Edit Text"><p class="label_name">Enter img url:</p><input type="url" name="img_url" class="img_url"> <button class="ok_btn">OK</button> <p class="label_name margin1010">or</p><div class="upload_div"> Upload Image <input type="file" name="img_file" class="img_file" id="img_file"> </div><br></div><!-- <div class="wrap_img image_draggable1 drag_input text_draggable"><input class="resizable_text builder_input" ></div>--></div>' ); 

    	dialog = $( "#dialog" ).dialog({
	    	autoOpen: false,
	    	modal: true,
	    	resizable: false,
	    	draggable: false,
	    });

    	dialog2 = $( "#dialog2" ).dialog({
	    	autoOpen: false,
	    	modal: true,
	    	resizable: false,
	    	draggable: false,
	    });

  		$('#nice_select').niceSelect();

    	$('#colorpicker1').colorpicker({
    		useAlpha: true
		});
		resize_3_2 ()

    	$('.ui-icon-gripsmall-diagonal-se').css('display','inherit')
    	e.preventDefault()
    	if ($('.page_header_side').hasClass('active-slide-side-header')){
    		$('.toggle_menu_side').trigger('click')
    	}
    	$( ".modal").css( "display", "none" );
    	$( "#box_wrapper" ).children().not( "#visible" ).css( "display", "none" );
    	$( "#visible" ).children().not( "form" ).css( "display", "none" );
    	$( "#visible form" ).children().not( ".edit_tools" ).not( ".canvas_div" ).css( "display", "none" );
    	$( ".canvas_div" ).removeClass('none');
    	$( ".edit_tools" ).removeClass('none');
    	$( "body" ).css( "overflow", "hidden" );

    	$( ".canvas_div" ).removeClass('mbottom')
    	$( ".canvas_div" ).addClass('opened')

    	if ($(window).width() < $(window).height()) {
    		$('#rotatescreen').removeClass('none')
    		$('#rotatescreen').addClass('opened')
    	}

    	
    });
});

$(function() { 
    $("#open_builder").click(function(e) { 
    	$('.ui-icon-gripsmall-diagonal-se').css('display','inherit')
    	e.preventDefault()
    	if ($('.page_header_side').hasClass('active-slide-side-header')){
    		$('.toggle_menu_side').trigger('click')
    	}
    	$( ".modal").css( "display", "none" );
    	$( "#box_wrapper" ).children().not( "#visible" ).css( "display", "none" );
    	$( "#visible" ).children().not( "form" ).css( "display", "none" );
    	$( "#visible form" ).children().not( ".edit_tools" ).not( ".canvas_div" ).css( "display", "none" );
    	$( ".canvas_div" ).removeClass('none');
    	$( ".edit_tools" ).removeClass('none');
    	$( "body" ).css( "overflow", "hidden" );

    	$( ".canvas_div" ).removeClass('mbottom')
    	$( ".canvas_div" ).addClass('opened')

    	if ($(window).width() < $(window).height()) {
    		$('#rotatescreen').removeClass('none')
    		$('#rotatescreen').addClass('opened')
    	}

    	
    });
});

$(document).on('click', '#cancel_btn', function(e) { 
	e.preventDefault()
	if (!$('.page_header_side').hasClass('active-slide-side-header')){
		$('.toggle_menu_side').trigger('click')
	}
	$( ".modal").css( "display", "auto" );
	$( "#box_wrapper" ).children().not( "#visible" ).css( "display", "block" );
	$( "#visible" ).children().not( "form" ).css( "display", "block" );
	$( "#visible form" ).children().not( ".edit_tools" ).not( ".canvas_div" ).css( "display", "block" );
	$( ".canvas_div" ).removeClass('none');
	$( ".edit_tools" ).removeClass('none');
	$( "body" ).css( "overflow", "visible" );

	$( ".canvas_div" ).addClass('none')
	$( ".edit_tools" ).addClass('none')
	$('.appended_canvas').removeClass('none')
	$( ".canvas_div" ).removeClass('opened')
	$('.video_content').css('display', 'none')
	$('.audio_content').css('display', 'none')
});




$(document).on('click', '#btnSave', function(e) { 
	e.preventDefault();
	loading()

	$('.ui-icon-gripsmall-diagonal-se').css('opacity','0');
	$('.ui-rotatable-handle').css('opacity','0');
	$('.canvas_div').css('border-color','transparent');
	$('.builder_input').css('border-width','0');
	$('.fa').css('display','none');
	$('.nice_color').css('display','none');
	$('.eye_btn').css('visibility','hidden');

	 html2canvas($('.canvas_div').get(0), {background: null, letterRendering: 1, "proxy": 'html2canvasproxy.php' , "logging" : true}).then(function(canvas) {
	 	// var appended_canvas = document.getElementsByClassName('appended_canvas')
   //      appended_canvas.appendChild(canvas);
        
        var a = document.createElement('a');
        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
        a.href = canvas.toDataURL("image/png")


        b64toBlob(a.href,
	    function(blob) {
	        var url = window.URL.createObjectURL(blob);
	        $('.appended_canvas_img').attr("src", url);
	    }, function(error) {
	        console.log('error!')
	    });


        
        //a.download = 'severenity_quest.jpg';
        //a.click();

        $('.ui-icon-gripsmall-diagonal-se').css('opacity','1');
    	$('.ui-rotatable-handle').css('opacity','1');
    	$('.canvas_div').css('border','2px solid #5f3e7c');
    	$('.builder_input').css('border-width','2px');
    	$('.fa').css('display','inline-block');
    	$('.nice_color').css('display','block');
    	$('.eye_btn').css('visibility','visible');
    	loading_disappear()
    });


});

function b64toBlob(b64, onsuccess, onerror) {
    var img = new Image();

    img.onerror = onerror;

    img.onload = function onload() {
        var canvas = document.createElement('canvas');
        canvas.width = img.width;
        canvas.height = img.height;

        var ctx = canvas.getContext('2d');
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

        canvas.toBlob(onsuccess);
    };

    img.src = b64;
}



$(document).on('click', '#btnSave2', function(e) { 
	e.preventDefault();
	loading()

	$('.ui-icon-gripsmall-diagonal-se').css('opacity','0');
	$('.ui-rotatable-handle').css('opacity','0');
	$('.canvas_div').css('border-color','transparent');
	$('.builder_input').css('border-width','0');
	$('.fa').css('display','none');
	$('.nice_color').css('display','none');
	$('.eye_btn').css('display','none');


	 html2canvas($('.canvas_div').get(0), {letterRendering: 1, "proxy": 'html2canvasproxy.php' , "logging" : true}).then(function(canvas) {
	 	// var appended_canvas = document.getElementsByClassName('appended_canvas')
   //      appended_canvas.appendChild(canvas);
        
        var a = document.createElement('a');
        // toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
        a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
        $('.appended_canvas_img2').attr("src", a.href);
        //a.download = 'severenity_quest.jpg';
        //a.click();

        $('.ui-icon-gripsmall-diagonal-se').css('opacity','1');
    	$('.ui-rotatable-handle').css('opacity','1');
    	$('.canvas_div').css('border','2px solid #5f3e7c');
    	$('.builder_input').css('border-width','2px');
    	$('.fa').css('display','inline-block');
    	$('.nice_color').css('display','block');
    	$('.eye_btn').css('display','inline-block');
    	loading_disappear()
    });

	
	

	// $("#cancel_btn").trigger('click')

});



</script>  


	<!-- template init -->
	<!-- <script src="js/compressed.js"></script> -->
	<script src="js/navbar.js"></script>


	<!-- dashboard libs -->

	<!-- events calendar -->
	<script src="js/admin/moment.min.js"></script>
	<script src="js/admin/fullcalendar.min.js"></script>
	<!-- range picker -->
	<script src="js/admin/daterangepicker.js"></script>

	<!-- charts -->
	<script src="js/admin/Chart.bundle.min.js"></script>

	<!-- small charts -->
	<script src="js/admin/jquery.sparkline.min.js"></script>

	<!-- dashboard init -->
	<script src="js/admin.js"></script>

<script>
	 
$('.create_quest_btn').click(function(e){
	var title = $('input[name="title"').val()
	var description = $('input[name="description"').val()
	var file = $('input[name="file-6[]"').val()
	var value = $('input[name="value"').val()
	var origin = $('input[name="origin"').val()
	var destination = $('input[name="destination"').val()
	var price = $('input[name="price"').val()
	var rating = $('input[name="rating"').val()

	if (title == '' || description == '' || file == '' || price == '' || rating == '') {
		e.preventDefault()
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Fill out all required fields!')
		window.scrollTo(0,0);
	}else if (value == '' && (origin == '' || destination == '')) {
		e.preventDefault()
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Enter Value or Create way on Map!')
		window.scrollTo(0,0);
	}else if (!$.isNumeric(value), !$.isNumeric(price), !$.isNumeric(rating)) {
		e.preventDefault()
		$('.warning_message').removeClass('none')
		$('.warning_message').html('*Enter valid numeric values!')
		window.scrollTo(0,0);
	}
	
})

$(document).on('click', '#menu li', function(e) {
	$(this).parent().children().removeClass('active_option')
	$(this).addClass('active_option')
})

$('.popup').mouseover(function(){
	$(this).find('.popuptext').addClass('show')
	$(this).find('i').css('opacity', '1')
})
$('.popup').mouseleave(function(){
	$(this).find('.popuptext').removeClass('show')
	$(this).find('i').css('opacity', '.7')
})


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            	$('#blah').removeClass('none')
            	$('.figure_file').addClass('none')
                $('#blah').attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

function readURL30(input) {
    var numFiles = input.files.length;

    if (input.files && input.files[0]) {

     var reader = new FileReader();
      reader.onload = function (e) {

        	console.log(true)
            $('#img_change').attr('src', e.target.result)

      }
      reader.readAsDataURL(input.files[0]);
    }
}

// $(document).on('change', '#media_input', function(e){
//     readURL30(this);
// });

$(document).ready(function(){
	if ($('.number_input').width() < 60){
		$('.flex_row').addClass('input_responsive')
	}else{
		$('.flex_row').removeClass('input_responsive')
	}
})


// $(window).resize(function(){
// 	console.log($('.number_input').width())
// 	if ($('.number_input').width() < 60){
// 		$('.flex_row').addClass('input_responsive')
// 	}else{
// 		$('.flex_row').removeClass('input_responsive')
// 	}
// })

</script>

    
</body>

</html>
