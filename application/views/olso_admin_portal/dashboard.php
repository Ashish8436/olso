<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:47:40 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Dashboard</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/entypo.css');?>" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/font-awesome.min.css');?>" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?= base_url('olso_admin_assets/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/integral-core.css');?>" rel="stylesheet">
<!-- /integral core stylesheet -->

<!--Jvector Map-->
<link href="<?= base_url('olso_admin_assets/plugins/jvectormap/css/jquery-jvectormap-2.0.3.css');?>" rel="stylesheet">

<link href="<?= base_url('olso_admin_assets/css/integral-forms.css');?>" rel="stylesheet">

</head>
<body>

<!-- Loader Backdrop -->
	<div class="loader-backdrop">           
	  <!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
	  <!-- /loader -->
	</div>
<!-- loader backgrop -->
	
<!-- Page container -->
<?php include('pages/header.php'); ?>
		
		<!-- Main content -->
		<div class="main-content">
		
			<h1 class="page-title">Dashboard</h1>
			<br>
			
			<!-- Row-->
			<div class="row">
			
				<!-- Online Signup -->
				<div class="col-lg-3 col-sm-6">
					<div class="panel minimal secondary-bg">
						<div class="panel-body">
							<h2 class="no-margins"><strong>2,397</strong></h2>
							<p>Online Signups</p>
							<div class="float-chart-sm pt-15">
								<div id="online-signup" class="flot-chart-content"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Online Signup -->
				
				<!-- Last Month Sale -->
				<div class="col-lg-3 col-sm-6">
					<div class="panel minimal primary-bg">
						<div class="panel-body">
							<h2 class="no-margins"><strong>$8,790</strong></h2>
							<p>Last Month Sale</p>
						</div>
						<div class="float-chart-sm">
							<div class="last-month-outer">
							  <div id="last-month-sale" class="flot-chart-content"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /last month sale -->
				
				<!-- New Visits -->
				<div class="col-lg-3 col-sm-6">
					<div class="panel minimal teal-bg">
						<div class="panel-body">
							<h2 class="no-margins"><strong>296</strong></h2>
							<p>New visits this month</p>
							
							<!-- Mini Progress -->
							<div class="mini-progress">
							    
								<!-- Progress Media -->
								<div class="progress-media">
									<div class="progress-label">
										<small>136 Web</small>									
									</div>
									<div class="progress-wrap">
										<div class="progress sm-progress"> 
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> 
												<span class="sr-only">136 Web</span>											
											</div> 
										</div>
									</div>
								</div>
								<!-- /progress media -->
								
								<!-- Progress Media -->
								<div class="progress-media">
									<div class="progress-label">
										<small>60 Android</small>									
									</div>
									<div class="progress-wrap">
										<div class="progress sm-progress"> 
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> 
												<span class="sr-only">60 Android</span>											
											</div> 
										</div>
									</div>
								</div>
								<!-- /progress media -->
								
								<!-- Progress Media -->
								<div class="progress-media">
									<div class="progress-label">
										<small>40 iOS</small>									
									</div>
									<div class="progress-wrap">
										<div class="progress sm-progress"> 
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%"> 
												<span class="sr-only">40 iOS</span>											
											</div> 
										</div>
									</div>
								</div>
								<!-- /progress media -->
							</div>
							<!-- /mini progress -->
						</div>
					</div>
				</div>
				<!-- /new visits -->
				
				<!-- Total Revenu -->
				<div class="col-lg-3 col-sm-6">
					<div class="panel minimal info-bg">
						<div class="panel-body">
							<h2 class="no-margins"><strong>$87,356</strong></h2>
							<p>Total revenue this year</p>
							<div class="float-chart-sm pt-15">
								<div id="total-revenue" class="flot-chart-content"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /total revenu -->
			</div>
			<!-- /row-->
			
			<!-- Row -->
			<div class="row">
			
			    <!-- Recent Activities -->
				<div class="col-lg-7">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Recent activities</h3>
							<ul class="comments-list removeable-list">
								<li>
									<div class="comment-head"><a href="#/">Jassica</a> commented on <a href="#/">4 keys to make your business unique</a></div>
									<div class="comment-text">
										<p>Thank you for posting such a wonderful content. The writing was outstanding. Subscribed to latest from you as well :)</p>
									</div>
									<div class="comment-footer">
										<button class="btn btn-sm btn-primary">APPROVE</button>
										<button class="btn btn-sm">Deny</button>
									</div>
									<a href="#/" class="remove"><img src="<?= base_url('olso_admin_assets/images/icon-close.png');?>" alt="Remove" title="Remove"></a>								
								</li>
								<li>
									<div class="comment-head"><a href="#/">Jake</a> commented on <a href="#/">100 JavaScript hacks you would love to learn</a></div>
									<div class="comment-text">
										<p>Amazing article! Thanks a lot for this useful information. Could you also write a little something about WordPress Security? I am a WordPress developer and would love to know more about it. Thanks in advance.</p>
									</div>
									<div class="comment-footer">
										<button class="btn btn-sm btn-primary">APPROVE</button>
										<button class="btn btn-sm">Deny</button>
									</div>
									<a href="#/" class="remove"><img src="<?= base_url('olso_admin_assets/images/icon-close.png');?>" alt="Remove" title="Remove"></a>								
								</li>
								<li>
									<div class="comment-head"><a href="#/">Patricia</a> commented on <a href="#/">How to write catchy titles for your blog</a></div>
									<div class="comment-text">
										<p>Catchy title is your golden ticket to increased traffic and wider audience. Will definitely use the tips you have provided for my upcoming blogs. By the way, I need some guidance on how to promote my blog. Can you help?</p>
									</div>
									<div class="comment-footer">
										<button class="btn btn-sm btn-primary">APPROVE</button>
										<button class="btn btn-sm">Deny</button>
									</div>
									<a href="#/" class="remove"><img src="<?= base_url('olso_admin_assets/images/icon-close.png');?>" alt="Remove" title="Remove"></a>								
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /recent activities -->
				
				<!-- Col-lg-5 -->
				<div class="col-lg-5">
				
				   <!-- Google insight score -->
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="media"> 
								<div class="media-left">
									<div class="knob-outer">
										<input type="text" readonly  class="knob" data-width="82" data-height="82" data-fgColor="#29B6F6" value="79">
									</div>
								</div> 
								<div class="media-body"> 
									<h4 class="media-heading">Google insight score</h4> 
									<p>Las calculated 1 month ago</p>
									<button class="btn btn-sm btn-primary">Refresh</button> 
								</div> 
							</div>
						</div>
					</div>
					<!-- /google insight score -->
					
					<!-- Yahoo Speed Score -->
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="media"> 
								<div class="media-left">
									<div class="knob-outer">
										<input type="text" readonly class="knob" data-width="82" data-height="82" data-fgColor="#EC407A" value="73">
									</div>
								</div> 
								<div class="media-body"> 
									<h4 class="media-heading">Yahoo Speed Score</h4> 
									<p>Las calculated 1 month ago</p>
									<button class="btn btn-sm btn-primary">Refresh</button> 
								</div> 
							</div>
						</div>
					</div>
					<!-- /yahoo Speed Score -->
					
					<!-- Mailbox -->
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>Mailbox</h4>
							<p>Last time accessed on 21st July, 2016</p>
							<ul class="list-item mailbox-list">
								<li><span class="badge badge-default pull-right">27</span> <span>Inbox</span></li>
								<li><span class="badge badge-primary pull-right">12</span> <span class="text-primary">Linkedin</span></li>
								<li><span class="badge badge-danger pull-right">8</span> <span class="text-danger">Chatbull</span></li>
							</ul>
						</div>
					</div>
					<!-- /mailbox -->
				</div>
				<!-- /col-lg-5 -->
			</div>
			<!-- /row-->
			
			<!-- Row-->
			<div class="row">
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading clearfix"> 
							<h4 class="panel-title">TO-DOs for today</h4>
							<ul class="panel-tool-options"> 
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
										<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
										<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
									</ul>
								 </li>
							</ul>
						</div> 
						<!-- panel body --> 
						<div class="panel-body">
							<ul class="list-item todo-list"> 
								<li> 
									<div class="checkbox checkbox-replace checkbox-primary"> 
										<input type="checkbox" id="task-1" /> <label for="task-1">Fresh look &amp; feel to repaint the website according to the new brand logo.</label> 
									</div> 
								</li> 
								<li> 
									<div class="checkbox checkbox-replace checkbox-primary"> 
										<input type="checkbox" id="task-2" checked /> <label for="task-2">Need some new responsive design for the wbesite.</label> 
									</div> 
								</li> 
								<li> 
									<div class="checkbox checkbox-replace checkbox-primary"> 
										<input type="checkbox" id="task-3" /> <label for="task-3">Fresh look &amp; feel to repaint the website according to the new brand logo. </label> 
									</div> 
								</li> 
								<li> 
									<div class="checkbox checkbox-replace checkbox-primary"> 
										<input type="checkbox" id="task-4" /> <label for="task-4">Fresh look &amp; feel to repaint the website according to the new brand logo. </label> 
									</div> 
								</li> 
								<li> 
									<div class="checkbox checkbox-replace checkbox-primary"> 
										<input type="checkbox" id="task-5" /> <label for="task-5">Fresh look &amp; feel to repaint the website according to the new brand logo. </label> 
									</div> 
								</li> 
							</ul>
							<div class="more">
								<button class="btn btn-sm btn-primary">Check More</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading clearfix"> 
							<h4 class="panel-title">Overall Sales</h4>
							<ul class="panel-tool-options"> 
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
										<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
										<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
									</ul>
								 </li>
							</ul>
						</div> 
						<!-- panel body --> 
						<div class="panel-body">
							<p>Lorem ipsum is dummy content dollar and typesetting industry sit for your website. Any text could go here.</p>
							<div class="canvas-chart">
								<canvas id="polarChart" height="318"></canvas>
							</div>
						</div>
						<!-- /panel body --> 
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading clearfix"> 
							<h4 class="panel-title">New Messages</h4>
							<ul class="panel-tool-options"> 
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
										<li><a href="#"><i class="icon-list"></i> Detailed log</a></li>
										<li><a href="#"><i class="icon-chart-pie"></i> Statistics</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="icon-cancel"></i> Clear list</a></li>
									</ul>
								 </li>
							</ul>
						</div> 
						<!-- panel body --> 
						<div class="panel-body">
							<ul class="list-item message-list">
								<li>
									<i class="fa fa-envelope-o fa-2x text-primary icon-mail"></i>
									<div class="message-body">
										<h5>Interested in buying your pro</h5>
										<p>Your product sounds interesting I would love to check this ne...</p>
									</div>
								</li>
								<li>
									<i class="fa fa-envelope-o fa-2x text-primary icon-mail"></i>
									<div class="message-body">
										<h5>Interested in buying your pro</h5>
										<p>Your product sounds interesting I would love to check this ne...</p>
									</div>
								</li>
								<li>
									<i class="fa fa-envelope-o fa-2x text-primary icon-mail"></i>
									<div class="message-body">
										<h5>Interested in buying your pro</h5>
										<p>Your product sounds interesting I would love to check this ne...</p>
									</div>
								</li>
								<li>
									<i class="fa fa-envelope-o fa-2x text-primary icon-mail"></i>
									<div class="message-body">
										<h5>Interested in buying your pro</h5>
										<p>Your product sounds interesting I would love to check this ne...</p>
									</div>
								</li>
							</ul>
							<div class="more">
								<button class="btn btn-sm btn-primary">Check More</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			
			<!-- Row-->
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading no-border clearfix"> 
							<h4 class="panel-title">Website Traffic</h4>
							<ul class="panel-tool-options"> 
								<li><a href="#" data-rel="reload"><i class="icon-arrows-ccw icon-2x"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<div class="morris-chart">
								<div id="morris-donut-chart"></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading no-border clearfix"> 
							<h4 class="panel-title">Most Popular Products</h4>
						</div>
						<div class="panel-body">
							<div class="carousel slide" id="carousel3">
								<div class="carousel-inner">
									<div class="item gallery active">
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/alarm.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>BonZoid analog clocks</h5>
														<p>36 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/annual-book.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>Novelty Office Folders</h5>
														<p>31 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/chocolate.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>PrettyPink Bouquets &amp; Flowers</h5>
														<p>27 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/clock.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>SmartPro Watches</h5>
														<p>13 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/running-shoe.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>Denim Shoes &amp; Sandals</h5>
														<p>36 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/snooker.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>Billiards Accessories</h5>
														<p>31 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/headphone.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>HiEnd Headphones</h5>
														<p>27 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/camera.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>VisioPro DSLR Camera</h5>
														<p>13 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item gallery">
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/alarm.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>BonZoid analog clocks</h5>
														<p>36 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/annual-book.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>Novelty Office Folders</h5>
														<p>31 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/chocolate.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>PrettyPink Bouquets &amp; Flowers</h5>
														<p>27 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/clock.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>SmartPro Watches</h5>
														<p>13 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/running-shoe.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>Denim Shoes &amp; Sandals</h5>
														<p>36 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/snooker.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>Billiards Accessories</h5>
														<p>31 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/headphone.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>HiEnd Headphones</h5>
														<p>27 Items sold so far.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="product-view">
													<div class="product-thumb">
														<img class="img-responsive" title="" alt="" src="<?= base_url('olso_admin_assets/images/camera.jpg');?>">													
													</div>
													<div class="product-detail">
														<h5>VisioPro DSLR Camera</h5>
														<p>13 Items sold so far.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-footer">
										<div class="carousel-controller">	
											<a data-slide="prev" href="#carousel3" class="btn-carousel"><i class="icon-left-open-big"></i></a>
											<a data-slide="next" href="#carousel3" class="btn-carousel"><i class="icon-right-open-big"></i></a>										
										</div>
										<strong><a href="#/" class="link uppercase">show all products</a></strong>									
								   </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			
			<!-- Row-->
			<div class="row">
			
				<div class="col-md-12"> 
					<div class="panel panel-default gray-bg">
					
						<!-- Panel body --> 
						<div class="panel-body"> 
							<div class="jvectormap-section" id="world-map-markers" style="height: 400px"></div>
						</div> 
						<!-- /panel body -->
					</div> 
				</div>
			</div>
			<!-- /row -->
			
			<!-- Footer -->
			<footer class="footer-main"> 
				&copy; 2016 <strong>Integral</strong> Admin Template by <a target="_blank" href="#/">G-axon</a>			
			</footer>	
			<!-- /footer -->
	  </div>
	  <!-- /main content -->
  </div>
  <!-- /main container -->
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="<?= base_url('olso_admin_assets/js/jquery.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/js/bootstrap.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/metismenu/js/jquery.metisMenu.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/blockui-master/js/jquery-ui.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/blockui-master/js/jquery.blockUI.js');?>"></script>

<!--Knob Charts-->
<script src="<?= base_url('olso_admin_assets/plugins/knob/js/jquery.knob.min.js');?>"></script>

<!--Jvector Map-->
<script src="<?= base_url('olso_admin_assets/plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js');?>"></script>

<!--ChartJs-->
<script src="<?= base_url('olso_admin_assets/plugins/chartjs/js/Chart.min.js');?>"></script>

<!--Morris Charts-->
<script src="<?= base_url('olso_admin_assets/plugins/morris/js/raphael-min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/morris/js/morris.min.js');?>"></script>

<!--Float Charts-->
<script src="<?= base_url('olso_admin_assets/plugins/flot/js/jquery.flot.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/flot/js/jquery.flot.tooltip.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/flot/js/jquery.flot.resize.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/flot/js/jquery.flot.pie.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/flot/js/jquery.flot.time.min.js');?>"></script>

<!--Functions Js-->
<script src="<?= base_url('olso_admin_assets/js/functions.js');?>"></script>

<!--Dashboard Js-->
<script src="<?= base_url('olso_admin_assets/js/dashboard.js');?>"></script>

<script src="<?= base_url('olso_admin_assets/js/loader.js');?>"></script>

</body>

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:48:22 GMT -->
</html>
