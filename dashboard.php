<?php include 'base.php' ?>

	

<?php startblock('content') ?>

<section class="ls with_bottom_border">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb darklinks">
					<li>
						<a href="#">Home</a>
					</li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
			<!-- .col-* -->
			<div class="col-md-6 text-md-right">
				<span class="dashboard-daterangepicker">
					<i class="fa fa-calendar"></i>
					<span></span>
					<i class="caret"></i>
				</span>
			</div>
			<!-- .col-* -->
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
</section>

<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-4">
				<h3 class="dashboard-page-title">Statistics
					<small>dashboard</small>
				</h3>
			</div>
			<div class="col-md-8 text-md-right">
				<h3 class="sparklines-title">
					<sup>Today Earnings:</sup>

					$3,000

					<span class="sparklines" data-values="670,350,135,-170,-324,-386,-468,-200,55,375,520,270,790,-670,-350,135,170,324,386,468,10,55,375,520,270,790" data-type="bar" data-line-color="#eeb269" data-neg-color="#dc5753" data-height="30" data-bar-width="2">
					</span>

				</h3>

				<h3 class="sparklines-title">
					<sup>Yesterday Earn: </sup>
					$4,000

					<span class="sparklines" data-values="670,350,135,-170,-324,386,-468,-10,55,375,520,-270,790,670,-350,135,170,324,386,468,10,-55,-375,-520,270,790" data-type="bar" data-line-color="#4db19e" data-neg-color="#007ebd" data-height="30" data-bar-width="2">
					</span>
				</h3>

			</div>

		</div>
		<!-- .row -->


		<div class="row">
			<div class="col-lg-3 col-sm-6">

				<div class="teaser warning_bg_color counter-background-teaser text-center">
					<span class="counter counter-background" data-from="0" data-to="23" data-speed="2100">0</span>
					<h3 class="counter highlight" data-from="0" data-to="23" data-speed="100">0</h3>
					<p>Sales / Month</p>
				</div>

			</div>

			<div class="col-lg-3 col-sm-6">

				<div class="teaser danger_bg_color counter-background-teaser text-center">
					<span class="counter counter-background" data-from="0" data-to="20" data-speed="1500">0</span>
					<h3 class="counter highlight" data-from="0" data-to="20" data-speed="1500">0</h3>
					<p>Clients / Month</p>
				</div>

			</div>

			<div class="col-lg-3 col-sm-6">

				<div class="teaser success_bg_color counter-background-teaser text-center">
					<span class="counter counter-background" data-from="0" data-to="216" data-speed="1900">0</span>
					<h3 class="counter highlight" data-from="0" data-to="216" data-speed="1900">0</h3>
					<p>My Quests Quantity</p>
				</div>

			</div>

			<div class="col-lg-3 col-sm-6">

				<div class="teaser info_bg_color counter-background-teaser text-center">
					<span class="counter counter-background" data-from="0" data-to="15" data-speed="1800">0</span>
					<h3 class="counter-wrap highlight" data-from="0" data-to="346" data-speed="1800">
						<small>$</small>
						<span class="counter" data-from="0" data-to="15" data-speed="1500">0</span>
						<small class="counter-add">k</small>
					</h3>
					<p>Total Profit</p>
				</div>

			</div>
		</div>

		<div class="row">
			<!-- Yearly Visitors -->
			<div class="col-xs-12 col-md-6">
				<div class="with_border with_padding">
					<h4>Sells Statistics</h4>
					<div class="canvas-chart-wrapper">
						<canvas class="canvas-chart-line-yearly-visitors"></canvas>
					</div>
				</div>
			</div>
			<!-- .col-* -->

			<!-- Yearly Visitors -->
			<div class="col-xs-12 col-md-6">
				<div class="with_border with_padding">
					<h4>Views vs Sells</h4>
					<div class="canvas-chart-wrapper">
						<canvas class="canvas-chart-line-visitors-sels"></canvas>
					</div>
					<!-- 
		Pie Chart for new visitors. Uncomment if need 
		<div>
			<canvas class="canvas-chart-pie-visitors"></canvas>
		</div>
		-->
				</div>
			</div>
			<!-- .col-* -->

		</div>
		<!-- .row -->

		<div class="row">
			<div class="col-xs-12 col-md-6">

				<div class="with_border with_padding">
					<h4>
						Latest Quest Feedback
					</h4>
					<div class="admin-scroll-panel scrollbar-macosx">
						<ul class="list1 no-bullets">
							<li class="item-editable">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#">
											<i class="fa fa-comment"></i>
										</a>
									</div>
									<div class="media-left">
										<img src="images/team/01.jpg" alt="...">
									</div>
									<div class="media-body">
										<h5>
											Alex Walker
											<small>2 hours ago</small>
										</h5>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#">
											<i class="fa fa-comment"></i>
										</a>
									</div>
									<div class="media-left">
										<img src="images/team/02.jpg" alt="...">
									</div>
									<div class="media-body">
										<h5>
											Janet C. Donnalds
											<small>5 hours ago</small>
										</h5>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#">
											<i class="fa fa-comment"></i>
										</a>
									</div>
									<div class="media-left">
										<img src="images/team/03.jpg" alt="...">
									</div>
									<div class="media-body">
										<h5>
											Victoria Grow
											<small>1 day ago</small>
										</h5>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#">
											<i class="fa fa-comment"></i>
										</a>
									</div>
									<div class="media-left">
										<img src="images/team/01.jpg" alt="...">
									</div>
									<div class="media-body">
										<h5>
											Alex Walker
											<small>2 hours ago</small>
										</h5>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#">
											<i class="fa fa-comment"></i>
										</a>
									</div>
									<div class="media-left">
										<img src="images/team/02.jpg" alt="...">
									</div>
									<div class="media-body">
										<h5>
											Janet C. Donnalds
											<small>5 hours ago</small>
										</h5>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
										<a href="#">
											<i class="fa fa-comment"></i>
										</a>
									</div>
									<div class="media-left">
										<img src="images/team/03.jpg" alt="...">
									</div>
									<div class="media-body">
										<h5>
											Victoria Grow
											<small>1 day ago</small>
										</h5>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- .admin-scroll-panel -->
					<div class="text-right greylinks panel-view-all">
						<a href="admin_comments.html">View All</a>
					</div>
				</div>
				<!-- .with_border -->
			</div>
			<div class="col-xs-12 col-md-6">

				<div class="with_border with_padding">
					<h4>
						Latest Purchases
					</h4>
					<div class="admin-scroll-panel scrollbar-macosx">
						<ul class="list1 no-bullets">
							<li class="item-editable small-teaser">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="media no_margin" align="center">
										<p class="media_title"><a href="my_quests.html" class="black">«Consectetur adipisicing elit»</a></p>
										<div class="media-left">
											<img src="images/team/01.png" alt="...">
										</div>
										<div class="media-body">
											<h5>
												<a href="admin_profile.html">Alex Walker</a> bought it yesterday<br>
											</h5>
											Silver League
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable small-teaser">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="media no_margin" align="center">
										<p class="media_title"><a href="my_quests.html" class="black">«Consectetur adipisicing elit»</a></p>
										<div class="media-left">
											<img src="images/team/01.png" alt="...">
										</div>
										<div class="media-body">
											<h5>
												<a href="admin_profile.html">Alex Walker</a> bought it yesterday<br>
											</h5>
											Silver League
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable small-teaser">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="media no_margin" align="center">
										<p class="media_title"><a href="my_quests.html" class="black">«Consectetur adipisicing elit»</a></p>
										<div class="media-left">
											<img src="images/team/01.png" alt="...">
										</div>
										<div class="media-body">
											<h5>
												<a href="admin_profile.html">Alex Walker</a> bought it yesterday<br>
											</h5>
											Silver League
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable small-teaser">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="media no_margin" align="center">
										<p class="media_title"><a href="my_quests.html" class="black">«Consectetur adipisicing elit»</a></p>
										<div class="media-left">
											<img src="images/team/01.png" alt="...">
										</div>
										<div class="media-body">
											<h5>
												<a href="admin_profile.html">Alex Walker</a> bought it yesterday<br>
											</h5>
											Silver League
										</div>
									</div>
								</div>
							</li>
							<li class="item-editable small-teaser">
								<div class="media">
									<div class="item-edit-controls darklinks">
										<a href="#">
											<i class="fa fa-eye"></i>
										</a>
									</div>
									<div class="media no_margin" align="center">
										<p class="media_title"><a href="my_quests.html" class="black">«Consectetur adipisicing elit»</a></p>
										<div class="media-left">
											<img src="images/team/01.png" alt="...">
										</div>
										<div class="media-body">
											<h5>
												<a href="admin_profile.html">Alex Walker</a> bought it yesterday<br>
											</h5>
											Silver League
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- .admin-scroll-panel -->
					<div class="text-right greylinks panel-view-all">
						<a href="sales.html">View All</a>
					</div>
				</div>
				<!-- .with_border -->
			</div>
			<!-- .col-* -->

			
			<!-- .col-* -->


		</div>
		<!-- .row -->


	



	</div>
	<!-- .container -->
</section>

<?php endblock() ?>	