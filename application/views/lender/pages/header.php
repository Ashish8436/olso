	<?php 
			$exp = explode('/',$_SERVER['REQUEST_URI']);
		?>
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
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="<?= base_url('Dashboard'); ?>"><img src="<?= base_url('assets/logo/logo.png');?>" alt="OLSO Rental" title="OLSO Logo" style="height:40px;" ></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<?php if ($exp[2] == 'Dashboard') { ?>
				<li class="active"><a href="<?= base_url('Dashboard'); ?>"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
			<?php }else{ ?>
				<li><a href="<?= base_url('Dashboard'); ?>"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
			<?php } ?>
			
			

			<?php if ( ($exp[2]=='Create-Offers') || ($exp[2]=='Instant-Book') || ($exp[2]=='Policies') || ($exp[2]=='Open-Hours') || ($exp[2]=='availability-settings') || ($exp[2]=='calendar-sync')) { ?>
				<li class="has-sub active"><a href=""><i class="icon-layout"></i><span class="title">Tools</span></a>
			<?php }else{ ?>
				<li class="has-sub"><a href=""><i class="icon-layout"></i><span class="title">Tools</span></a>
			<?php } ?>
			
				<ul class="nav collapse">
					<?php if($exp[2]=='Create-Offers'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?>
					<a href="<?= base_url('Create-Offers'); ?>"><span class="title">Offer and Promotons</span></a></li>

					<?php if($exp[2]=='Instant-Book'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('Instant-Book'); ?>"><span class="title">Instant Book</span></a></li>
					<?php if($exp[2]=='Policies'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('Policies'); ?>"><span class="title">Policies</span></a></li>
					<?php if($exp[2]=='Open-Hours'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('Open-Hours'); ?>"><span class="title">Open Hours</span></a></li>
					<?php if(($exp[2]=='availability-settings') || ($exp[2]=='calendar-sync')){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('availability-settings'); ?>"><span class="title">Calendar</span></a></li>
					
				</ul>
			</li>

			<?php if ( ($exp[2]=='Create-Item') || ($exp[2]=='my-items')) { ?>
				<li class="has-sub active"><a href=""><i class="icon-layout"></i><span class="title">Listing</span></a>
			<?php }else{ ?>
				<li class="has-sub"><a href=""><i class="icon-layout"></i><span class="title">Listing</span></a>
			<?php } ?>

			
				<ul class="nav collapse">
					<?php if($exp[2]=='Create-Item'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('Create-Item'); ?>"><span class="title">Create Item</span></a></li>
					<?php if($exp[2]=='my-items'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('my-items'); ?>"><span class="title">My Item</span></a></li>
				</ul>
			</li>

			<?php 
            $vendor_id = $this->session->userdata('oauth_uid');
            $total_barroing = $this->db->query("SELECT * FROM payment WHERE vendor_id='$vendor_id' and lender_seen='0'");
            ?>

            <?php 
            
            $total_booking_request = $this->db->query("SELECT * FROM booking_request WHERE vendor_id='$vendor_id' and lender_seen='0'");
            ?>

           	<?php if ( ($exp[2]=='request-items') || ($exp[2]=='Customer-Orders')) { ?>
			<li class="has-sub active">
			<?php } else{ ?>
				<li class="has-sub">
			<?php } ?>
				<a href=""><i class="icon-layout"></i><span class="title">Booking 
			 	<?php if($total_booking_request->num_rows()!='0' || $total_barroing->num_rows()!='0' ){ ?>
				<span class="badge badge-secondary"><span style="color:#ec407a;">.</span></span>
				<?php } ?>
			</span></a>
				<ul class="nav collapse">

					<?php if($exp[2]=='request-items'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('request-items'); ?>"><span class="title">Item Request 
					<?php if($total_booking_request->num_rows()!='0'){ ?>
						<span class="badge badge-secondary"><?php echo $total_booking_request->num_rows() ?></span>
					<?php } ?>
					</span></a></li>
					<?php if($exp[2]=='Customer-Orders'){ ?> <li class="active"> <?php } else { ?> <li><?php } ?><a href="<?= base_url('Customer-Orders'); ?>"><span class="title">Barrowing 
						<?php if($total_barroing->num_rows()!='0' ){ ?>
						<span class="badge badge-secondary"><?php echo $total_barroing->num_rows() ?></span>
						<?php } ?>

					</span></a></li>
				</ul>
			</li>

			<?php if ( ($exp[2]=='OLSO-Payout-Partner-Default-AccountRegistration') || ($exp[2]=='Modify-Bank-Account')) { ?>
			<li class="active">
			<?php } else{ ?>
				<li>
			<?php } ?>
			<a href="<?= base_url('OLSO-Payout-Partner-Default-AccountRegistration') ?>"><i class="icon-layout"></i><span class="title">Bank Setup</span></a>

			</li>
			
			<?php if ( ($exp[2]=='Transactions')) { ?>
			<li class="active">
			<?php } else{ ?>
				<li>
			<?php } ?><a href="<?= base_url('Transactions'); ?>"><i class="icon-layout"></i><span class="title">Transaction</span></a>
			</li>

		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7">
		  
			<!-- User info -->
			<ul class="user-info pull-left">          
			  <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="<?= base_url('assets/lender_assets/images/man-3.jpg');?>"><?php echo $user_details->first_name; ?> <?php echo $user_details->last_name; ?><span class="caret"></span></a>
			  
				<!-- User action menu -->
				<ul class="dropdown-menu">
				  <li><a href="<?= base_url('Create-Item'); ?>"><i class="icon-logout"></i>Create Item</a></li>
				  <li><a href="<?= base_url('Profile'); ?>"><i class="icon-logout"></i>My Profile</a></li>
				  <li><a href="<?= base_url('Trust-Verification'); ?>"><i class="icon-logout"></i>Trust & Verification</a></li>
				  <?php if($fetch_id_verification->verification_status=='1'){ ?>
				  <li><a href="<?= base_url('Docuement-Verify'); ?>"><i class="icon-logout"></i>Document_management</a></li>
				  <?php } ?>
				  <li><a href="<?= base_url('Logout'); ?>"><i class="icon-logout"></i>Logout</a></li>
				</ul>
				<!-- /user action menu -->
			  </li>
			</ul>
			<!-- /user info -->
		  </div>
		  
		  <div class="col-sm-6 col-xs-5">
			<div class="pull-right">
				<!-- User alerts -->
				<ul class="user-info pull-left">
			
				  <!-- Notifications -->
				  <li class="notifications dropdown">
					<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
					<ul class="dropdown-menu pull-right">
						<li class="first">
							<div class="small"><a class="pull-right" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
						</li>
						<li>
							<ul class="dropdown-list">
								<li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
								<li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
								<li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
								<li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
								<li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
								<li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							</ul>
						</li>
						<li class="external-last"> <a href="#">View all notifications</a> </li>
					</ul>
				  </li>
				  <!-- /notifications -->
				  
				  <!-- Messages -->
				  <li class="notifications dropdown">
					<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
					<ul class="dropdown-menu pull-right">
						<li class="first">
							<div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
						</li>
						<li>
							<ul class="media-list">
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url('assets/lender_assets/images/domnic-brown.png');?>"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">Domnic Brown</span>
											<span class="media-annotation pull-right">Tue</span>										
										</a>
										<span class="text-muted">Your product sounds interesting I would love to check this ne...</span>									
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url('assets/lender_assets/images/john-smith.png');?>"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">John Smith</span>
											<span class="media-annotation pull-right">12:30</span>										
										</a>
										<span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>									
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url('assets/lender_assets/images/stella-johnson.png');?>"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">Stella Johnson</span>
											<span class="media-annotation pull-right">2 days ago</span>										
										</a>
										<span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>									
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url('assets/lender_assets/images/alex-dolgove.png');?>"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">Alex Dolgove</span>
											<span class="media-annotation pull-right">10:45</span>										
										</a>
										<span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>									
									</div>
								</li>
								<li class="media">
									<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url('assets/lender_assets/images/domnic-brown.png');?>"></div>
									<div class="media-body">
										<a class="media-heading" href="#">
											<span class="text-semibold">Domnic Brown</span>
											<span class="media-annotation pull-right">4:00</span>										
										</a>
										<span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>									
									</div>
								</li>
							</ul>
						</li>
						<li class="external-last"> <a  href="#">All Messages</a> </li>
					</ul>
				  </li>
				  <!-- /messages -->
				</ul>
				<!-- /user alerts -->
			</div>
		  </div>
		</div>
		<!-- /main header -->
		