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
				<div class="container-fluid padding0">

					<div class="row">
						<div class="col-md-12">
							<h3 class="dashboard-page-title"><a href="dashboard.html">Quests</a>
								<small>feedback</small>
							</h3>
						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->

					<div class="row">
						<div class="col-xs-12">
							<div class="with_border with_padding">

								
								<!-- .row -->


								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<tr>
											<th>User:</th>
											<th class="feedback_table">Feedback:</th>
											<th>Quest Name:</th>
										</tr>
										<tr class="item-editable">
											<td>
												<div class="media" align="center">
													<div class="media-left">
														<img src="images/team/01.png" alt="...">
													</div>
													<div class="media-body">
														<h5>
															<a href="admin_profile.html">Alex Walker</a>
														</h5>
														Silver League
													</div>
												</div>
											</td>
											<td class="media-middle text-center">
												<div class="media" align="center">
													<div class="media-body">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat.
													</div>
												</div>
											</td>
											<td class="media-middle">
												<div class="media" align="center">
													<div class="media-body">
														<h5>
															<a href="admin_profile.html">Органний зал</a>
														</h5>
														Музичний інструмент
													</div>
												</div>
											</td>
										</tr>
										<tr class="item-editable">
											<td>
												<div class="media" align="center">
													<div class="media-left">
														<img src="images/team/01.png" alt="...">
													</div>
													<div class="media-body">
														<h5>
															<a href="admin_profile.html">Alex Walker</a>
														</h5>
														Silver League
													</div>
												</div>
											</td>
											<td class="media-middle text-center">
												<div class="media" align="center">
													<div class="media-body">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat.
													</div>
												</div>
											</td>
											<td class="media-middle">
												<div class="media" align="center">
													<div class="media-body">
														<h5>
															<a href="admin_profile.html">Органний зал</a>
														</h5>
														Музичний інструмент
													</div>
												</div>
											</td>
										</tr>
										<tr class="item-editable">
											<td>
												<div class="media" align="center">
													<div class="media-left">
														<img src="images/team/01.png" alt="...">
													</div>
													<div class="media-body">
														<h5>
															<a href="admin_profile.html">Alex Walker</a>
														</h5>
														Silver League
													</div>
												</div>
											</td>
											<td class="media-middle text-center">
												<div class="media" align="center">
													<div class="media-body">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
														quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat.
													</div>
												</div>
											</td>
											<td class="media-middle">
												<div class="media" align="center">
													<div class="media-body">
														<h5>
															<a href="admin_profile.html">Органний зал</a>
														</h5>
														Музичний інструмент
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