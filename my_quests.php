<?php include 'base.php' ?>


<?php startblock('content') ?>

			<section class="ls with_bottom_border">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<ol class="breadcrumb darklinks">
								<li>
									<a href="#">Dashboard</a>
								</li>
								<li class="active">My Quests List</li>
							</ol>
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
						<div class="col-xs-12">
							<div class="with_border with_padding">

								<div class="row admin-table-filters">
									<div class="col-lg-9">

										<form action="./" class="form-inline filters-form">
											<span>
												<label class="grey" for="with-selected">Select:</label>
												<select class="form-control with-selected" name="with-selected" id="with-selected">
													<option value="">All</option>
													<option value="approve">Expired</option>
													<option value="publish">Valid</option>
												</select>
											</span>
											<span>
												<label class="grey" for="orderby">Sort By:</label>
												<select class="form-control orderby" name="orderby" id="orderby">
													<option value="date" selected>Date</option>
													<option value="author">Sales</option>
													<option value="title">Title</option>
													<option value="title">Type</option>
												</select>
											</span>

											<span>
												<label class="grey" for="showcount">Show:</label>
												<select class="form-control showcount" name="showcount" id="showcount">
													<option value="10" selected>10</option>
													<option value="20">20</option>
													<option value="30">30</option>
												</select>
											</span>
										</form>

									</div>
									<!-- .col-* -->
									<div class="col-lg-3 text-lg-right">
										<div class="widget widget_search">

											<form method="get" class="searchform" action="./">
												<!-- <div class="form-group-wrap"> -->
												<div class="form-group">
													<label class="sr-only" for="widget-search">Search for:</label>
													<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
												</div>
												<button type="submit" class="theme_button color1 no_bg_button">Search</button>
												<!-- </div> -->
											</form>
										</div>

									</div>
									<!-- .col-* -->
								</div>
								<!-- .row -->


								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<tr>
											<th>Title:</th>
											<th>Type:</th>
											<th>Date:</th>
											<th>Status:</th>
											<th>Sales:</th>
											<th>Price:</th>
											<th></th>
										</tr>
										<tr class="item-editable">
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Consectetur adipisicing elit
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														AR Quest
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-09-08T20:25:23+00:00" class="entry-date green">Expires on 08.09.2017</time>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														23
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														<strong>$2</strong>
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<div class="dropdown">
													<div class="dots_container dropbtn" onclick="myFunction()">
														<div class="dots"></div>
													</div>
													<div id="myDropdown" class="dropdown-content">
													    <a href="#home">See quest</a>
													    <a href="#home">Change quest</a>
												  	</div>
												</div>
											</td>
										</tr>
										<tr class="item-editable">
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Consectetur adipisicing elit
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Collect
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-09-08T20:25:23+00:00" class="entry-date red">Expired on 08.09.2017</time>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														23
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														<strong>$2</strong>
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<div class="dropdown">
													<div class="dots_container dropbtn" onclick="myFunction2()">
														<div class="dots"></div>
													</div>
													<div id="myDropdown2" class="dropdown-content">
													    <a href="#home">See quest</a>
													    <a href="#home">Change quest</a>
												  	</div>
												</div>
											</td>
										</tr>
										<tr class="item-editable">
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Consectetur adipisicing elit
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Rebus
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-09-08T20:25:23+00:00" class="entry-date yellow">Reviewing</time>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														23
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														<strong>$2</strong>
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<div class="dropdown">
													<div class="dots_container dropbtn" onclick="myFunction3()">
														<div class="dots"></div>
													</div>
													<div id="myDropdown3" class="dropdown-content">
													    <a href="#home">See quest</a>
													    <a href="#home">Change quest</a>
												  	</div>
												</div>
											</td>
										</tr>
										<tr class="item-editable">
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Consectetur adipisicing elit
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Custom
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-09-08T20:25:23+00:00" class="entry-date green">Expires on 08.09.2017</time>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														23
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														<strong>$2</strong>
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<div class="dropdown">
													<div class="dots_container dropbtn" onclick="myFunction4()">
														<div class="dots"></div>
													</div>
													<div id="myDropdown4" class="dropdown-content">
													    <a href="#home">See quest</a>
													    <a href="#home">Change quest</a>
												  	</div>
												</div>
											</td>
										</tr>
										<tr class="item-editable">
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Consectetur adipisicing elit
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														AR Quest
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-09-08T20:25:23+00:00" class="entry-date green">Expires on 08.09.2017</time>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														23
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														<strong>$2</strong>
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<div class="dropdown">
													<div class="dots_container dropbtn" onclick="myFunction5()">
														<div class="dots"></div>
													</div>
													<div id="myDropdown5" class="dropdown-content">
													    <a href="#home">See quest</a>
													    <a href="#home">Change quest</a>
												  	</div>
												</div>
											</td>
										</tr>
										<tr class="item-editable">
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														Consectetur adipisicing elit
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="admin_post.html">
														AR Quest
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
											</td>
											<td class="media-middle text-center">
												<time datetime="2017-09-08T20:25:23+00:00" class="entry-date green">Expires on 08.09.2017</time>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														23
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<h5>
													<a href="sales.html">
														<strong>$2</strong>
													</a>
												</h5>
											</td>
											<td class="media-middle text-center">
												<div class="dropdown">
													<div class="dots_container dropbtn" onclick="myFunction6()">
														<div class="dots"></div>
													</div>
													<div id="myDropdown6" class="dropdown-content">
													    <a href="#home">See quest</a>
													    <a href="#home">Change quest</a>
												  	</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
								<!-- .table-responsive -->
							</div>
							<!-- .with_border -->
						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-md-6">
									<ul class="pagination">
										<li class="disabled">
											<a href="#">
												<span class="sr-only">Prev</span>
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
										</li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li>
											<a href="#">
												<span class="sr-only">Next</span>
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 text-md-right">
									Showing 1 to 6 of 12 items
								</div>
							</div>
						</div>
					</div>
					<!-- .row main columns -->
				</div>
				<!-- .container -->
			</section>

<?php endblock() ?>


<?php startblock('custom_scripts') ?>
			
<script>
	
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}
function myFunction4() {
    document.getElementById("myDropdown4").classList.toggle("show");
}
function myFunction5() {
    document.getElementById("myDropdown5").classList.toggle("show");
}
function myFunction6() {
    document.getElementById("myDropdown6").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>



<?php endblock() ?>